@extends('layout.v_template')

@section('title','Add Dosen')

@section('content')
    <form action="/dosen/insert" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="content">
            <div class="row">
                <div class="col-sm-6">

                    <div class="form-group">
                        <label>Nama Dosen</label>
                        <input name="nama_dosen" class="form-control" value="{{ old('nama_dosen') }}">
                        <div class="text-danger">
                            @error('nama_dosen')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Mata Kuliah</label>
                        <input name="matkul" class="form-control" value="{{ old('matkul') }}">
                        <div class="text-danger">
                            @error('matkul')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Jabatan</label>
                        <input name="jabatan" class="form-control" value="{{ old('jabatan') }}">
                        <div class="text-danger">
                            @error('jabatan')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary btn-sm">Simpan</button>
                        <a href="/dosen" class="btn btn-success btn-sm">Kembali</a>
                    </div>

                </div>       
            </div>
        </div>
    </form>
@endsection
