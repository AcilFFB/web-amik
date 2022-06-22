@extends('layout.v_template')

@section('title','Mahasiswa')

@section('content')
    <a href="/mahasiswa/add" class="btn btn-primary btn-sm">Add</a><br>

    @if (session('pesan'))<br>
    <div class="alert alert-success fade in">
        <button type="button" class="close pull-right" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <h4><i class="icon fa fa-check"></i> Success!</h4>
        {{ session('pesan') }}
    </div>
    @endif  
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>NPM</th>
                <th>Nama Mahasiswa</th>
                <th>Jurusan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $no=1; ?>
            @foreach ($mahasiswa as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->npm}}</td>
                    <td>{{ $data->nama_mahasiswa}}</td>
                    <td>{{ $data->jurusan}}</td>
                    <td>
                        <a href="/mahasiswa/detail/{{ $data->id_mahasiswa }}" class="btn btn-sm btn-success">Detail</a>
                        <a href="#" class="btn btn-sm btn-warning">Edit</a>
                        <a href="#" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection