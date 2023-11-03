@extends('template.master')
@section('container')

<div class="container">
<h3><strong>Ubah Data Cast</strong></h3><br>
    
        <form action="{{url('cast/'.$cast->id)}}" method="post" enctype="multipart/form-data">
            @method('patch')
            @csrf
            <div class="form-group">
                <label for="" class="form-label">Nama:</label>
                <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama" value="{{$cast->nama}}">
            </div>
            <div class="form-group">
                <label for="" class="form-label">Umur:</label>
                <input type="number" class="form-control" name="umur" placeholder="Masukkan Umur" value="{{$cast->umur}}">
            </div>
            <div class="form-group">
                <label for="image" class="form-label">Gambar:</label>
                <input type="file" class="form-control" id="image" name="image" value="{{ $cast->image }}">
            </div>
            <div class="form-group">
                <label for="" class="form-label">Bio:</label>
                <input name="bio" class="form-control" value="{{ $cast->bio }}">
            </div>
            <div class="nav justify-content-end">
                <a href="{{ url('cast/') }}" class="btn btn-secondary">Cancel</a>
                <button class="btn btn-success">Simpan</button>
            </div>
        </form>
    </div>
</div>

@endsection