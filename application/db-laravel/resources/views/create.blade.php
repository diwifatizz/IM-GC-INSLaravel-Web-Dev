@extends('template.master')
@section('container')

<div class="container">
<h3><strong>Tambah Cast Baru</strong></h3><br>

        <form class="form-horizontal" action="/cast" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="" class="form-label"><h6>Nama:</h6></label>
                <input type="text" class="form-control" name="nama" placeholder="Input Nama" autofocus required>
            </div>
            <div class="form-group">
                <label for="" class="form-label"><h6>Umur:</h6></label>
                <input type="number" class="form-control" name="umur" placeholder="Input Umur" autofocus required>
            </div>
            <div class="form-group">
                <label for="image" class="form-label">Input Gambar:</label>
                <input class="form-control" type="file" id="image" name="image">
              </div>
            <div class="form-group">
                <label for="" class="form-label"><h6>Bio:</h6></label>
                <input name="bio" class="form-control" placeholder="Masukkan Bio Pemeran">
            </div>

            <div class="nav justify-content-end">
                <a href="{{ url('cast/') }}" class="btn btn-secondary">Cancel</a>
                <button class="btn btn-success">Tambah Data</button>
            </div>
        </form>
    </div>
</div>

@endsection