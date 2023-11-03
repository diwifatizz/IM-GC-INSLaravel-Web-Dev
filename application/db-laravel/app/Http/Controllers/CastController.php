<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class CastController extends Controller
{
    public function index()
    {
        $cast = DB::table('cast')->orderBy('nama', 'asc')->get();
        return view('cast', ['cast' => $cast]);
    }

    public function create()
    {
            return view('create');
    }

    public function store(Request $request)
{

    $request->validate([
        'image' => 'file|max:3024', 
    ]);

    $imagePath = $request->file('image')->store('post-images');

    DB::table('cast')->insert([
        'nama' => $request->nama,
        'umur' => $request->umur,
        'bio' => $request->bio,
        'image' => $imagePath, 
    ]);

    session()->flash('status', 'Data berhasil ditambahkan!');
    return redirect('cast');
}


    public function show($id)
    {
        $cast = DB::table('cast')->find($id);
            return view('show', compact('cast'));
        
    }

    
    public function edit($id)
    {   
        $cast = DB::table('cast')->where('id',$id)->first();
        return view('edit', compact('cast'));
    }


    public function editProcces(Request $request, $id)
{
   
    if ($request->hasFile('image')) {
       
        $imagePath = $request->file('image')->store('post-images');

        
        DB::table('cast')->where('id', $id)->update([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'bio' => $request->bio,
            'image' => $imagePath
        ]);
    } else {
       
        DB::table('cast')->where('id', $id)->update([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'bio' => $request->bio
        ]);
    }

    session()->flash('edit', 'Data berhasil diupdate!');
    
    return redirect('cast');
}



    public function update(Request $request, $id)
    {
        
    }

    public function delete($id)
    {
        DB::table('cast')->where('id',$id)->delete();
        session()->flash('success', 'Data berhasil dihapus!');

        return redirect('cast');
    }

    
}
