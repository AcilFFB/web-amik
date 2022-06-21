@extends('layout.v_template')

@section('title','Add Mahasiswa')

@section('content')
    <form action="/mahasiswa/insert" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="content">
            <div class="row">
                <div class="col-sm-6">

                    <div class="form-group">
                        <label>NPM</label>
                        <input name="npm" class="form-control" value="{{ old('npm') }}">
                        <div class="text-danger">
                            @error('npm')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Nama Mahasiswa</label>
                        <input name="nama_mahasiswa" class="form-control" value="{{ old('nama_mahasiswa') }}">
                        <div class="text-danger">
                            @error('nama_mahasiswa')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Jurusan</label>
                        <input name="jurusan" class="form-control" value="{{ old('jurusan') }}">
                        <div class="text-danger">
                            @error('jurusan')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary btn-sm">Save</button>
                    </div>

                </div>       
            </div>
        </div>
    </form>
@endsection
