@extends('template.master')
@section('container')


<div class="container">
    <h3><strong>Casts</strong></h3>


<table id="example1" class="table table-bordered table-striped">
    @if(session('success'))
    <div class="alert alert-danger">{{ session('success') }}</div>
    <script type="text/javascript">
        setTimeout(function() {
            document.querySelector('.alert').style.display = 'none';
        }, 5000);
    </script>
    @endif
    @if (session('status'))
    <div class="alert alert-success">{{session('status')}}</div> 
    <script type="text/javascript">
        setTimeout(function() {
            document.querySelector('.alert').style.display = 'none';
        }, 5000);
    </script>       
    @endif
    @if (session('edit'))
    <div class="alert alert-warning">{{session('edit')}}</div>   
    <script type="text/javascript">
        setTimeout(function() {
            document.querySelector('.alert').style.display = 'none';
        }, 5000);
    </script>     
    @endif
    <div class="text-right mb-4">
        <a href="/cast/create" class="btn btn-info" title="Tambah Cast Baru">+ Tambah</a>
    </div>
    {{-- @if ($post->image)
    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" class="img-fluid mt-3">
    @else
    <img src="https://images.unsplash.com/photo-1698764714629-861fc31ed3cd?auto=format&fit=crop&q=80&w=870&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="{{ $post->category->name }}" class="img-fluid mt-3">
    @endif --}}

    <thead>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Umur</th>
        <th>Bio</th>
        <th>Aksi</th>
    </tr>
    </thead>
    
<tbody>
    @foreach($cast as $item)
    <tr>
        <td>{{$loop -> iteration}}</td>
        <td>{{$item->nama}}</td>
        <td>{{$item->umur}} Tahun</td>
        <td>{{$item->bio}}</td>
        <td>
            <a href="{{url('cast/'.$item->id) }}" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#myModal-{{ $item->id }}">
                <i class="fas fa-eye" title="Show"></i>
            </a>
            <a href="{{url('cast/edit/'.$item->id) }}" class="btn btn-primary btn-sm">
                <i class="fas fa-edit" title="Edit"></i>
            </a>
            <form id="delete-form-{{ $item->id }}" class="d-inline" method="post" action="{{ url('cast/' . $item->id) }}" onsubmit="return false;">
                @method('delete')
                @csrf
                <a href="#" class="btn btn-danger btn-sm" onclick="deleteConfirmation({{ $item->id }})">
                    <i class="fa fa-trash" title="Delete"></i>
                </a>
            </form>     
        </td>
    </tr>
</div>
        
    <!-- Modal -->
        <div class="modal fade" id="myModal-{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Detail Cast</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body text-center">
                        <img src="{{ asset('storage/' . $item->image) }}" alt="Cast Image" class="img-fluid mb-2" />
                        <ul class="list-unstyled text-left">
                            <li><strong>Nama :</strong>&nbsp;{{ $item->nama }}</li>
                            <li><strong>Umur :</strong>&nbsp;{{ $item->umur }} Tahun</li>
                            <li><strong>Bio :</strong>&nbsp;{{  $item->bio }}</li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</tbody>
</table>
@endsection
@push('scripts')
<script src="{{asset('adminLTE')}}/plugins/datatables/jquery.dataTables.js"></script>
<script src="{{asset('adminLTE')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<script>
$(function () {
$("#example1").DataTable();
});
</script>
@endpush