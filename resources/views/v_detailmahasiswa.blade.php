@extends('layout.v_template')
@section('title','Detail Mahasiswa')
@section('content')
    <table class="table">
        <tr>
            <th width="100px">NPM</th>
            <th width="30px">:</th>
            <th>{{ $mahasiswa->npm }}</th>
        </tr>
        <tr>
            <th width="100px">Nama Mahasiswa</th>
            <th width="30px">:</th>
            <th>{{ $mahasiswa->nama_mahasiswa }}</th>
        </tr>
        <tr>
            <th width="100px">Jurusan</th>
            <th width="30px">:</th>
            <th>{{ $mahasiswa->jurusan }}</th>
        </tr>
        <tr>
            <th><a href="/mahasiswa" class="btn btn-success btn-sm">Kembali</a></th>
        </tr>
    </table>
@endsection
