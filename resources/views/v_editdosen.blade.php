@extends('layout.v_template')

@section('title','Edit Dosen')

@section('content')
<form action="/dosen/update/{{ $dosen->id_dosen }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="content">
            <div class="row">
                <div class="col-sm-6">

                    <div class="form-group">
                        <label>Nama Dosen</label>
                        <input name="nama_dosen" class="form-control" value="{{ $dosen->nama_dosen }}">
                        <div class="text-danger">
                            @error('nama_dosen')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Mata Kuliah</label>
                        <input name="matkul" class="form-control" value="{{ $dosen->matkul }}">
                        <div class="text-danger">
                            @error('matkul')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Jabatan</label>
                        <input name="jabatan" class="form-control" value="{{ $dosen->jabatan }}">
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
