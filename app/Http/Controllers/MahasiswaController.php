<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MahasiswaModel;

class MahasiswaController extends Controller
{
    public function __construct(){
        $this->MahasiswaModel = new MahasiswaModel();
        $this->middleware('auth');
    }  

    public function index(){
        $data = [
            'mahasiswa' => $this->MahasiswaModel->allData(),
        ];
        return view('v_mahasiswa', $data);
    }

    public function detail($id_mahasiswa){
        if (!$this->MahasiswaModel->detailData($id_mahasiswa)){
            abort(404);
        }
        $data = [
            'mahasiswa' => $this->MahasiswaModel->detailData($id_mahasiswa),
        ];
        return view('v_detailmahasiswa', $data);
    }

    public function add(){
        return view('v_addmahasiswa');
    }

    public function insert(){
        Request()->validate([
            'npm' => 'required|unique:tbl_mahasiswa,npm|min:7|max:8',
            'nama_mahasiswa' => 'required',
            'jurusan' => 'required',
        ],[
            'npm.required' => 'Tidak Boleh Kosong !!',
            'npm.unique' => 'NPM Sudah Ada !!',
            'npm.min' => 'Minimal 7 Karakter !!',
            'npm.max' => 'Maximal 8 Karakter !!',
            'nama_mahasiswa.required' => 'Tidak Boleh Kosong !!',
            'jurusan.required' => 'Tidak Boleh Kosong !!',
        ]);

        $data = [
            'npm' => Request()->npm,
            'nama_mahasiswa' => Request()->nama_mahasiswa,
            'jurusan' => Request()->jurusan,
        ];

        $this->MahasiswaModel->addData($data);
        return redirect()->route('mahasiswa')->with('pesan','Data Berhasil Ditambahkan !!!');
    }

    public function edit($id_mahasiswa){
        if (!$this->MahasiswaModel->detailData($id_mahasiswa)){
            abort(404);
        }
        $data = [
            'mahasiswa' => $this->MahasiswaModel->detailData($id_mahasiswa),
        ];
        return view('v_editmahasiswa', $data);
    }

    public function update($id_mahasiswa){
        Request()->validate([
            'npm' => 'required|min:7|max:8',
            'nama_mahasiswa' => 'required',
            'jurusan' => 'required',
        ],[
            'npm.required' => 'Tidak Boleh Kosong !!',
            'npm.min' => 'Minimal 7 Karakter !!',
            'npm.max' => 'Maximal 8 Karakter !!',
            'nama_mahasiswa.required' => 'Tidak Boleh Kosong !!',
            'jurusan.required' => 'Tidak Boleh Kosong !!',
        ]);

        $data = [
            'npm' => Request()->npm,
            'nama_mahasiswa' => Request()->nama_mahasiswa,
            'jurusan' => Request()->jurusan,
        ];

        $this->MahasiswaModel->editData($id_mahasiswa, $data);
        return redirect()->route('mahasiswa')->with('pesan','Data Berhasil Dirubah !!!');
    }

    public function delete($id_mahasiswa){
        $this->MahasiswaModel->deleteData($id_mahasiswa);
        return redirect()->route('mahasiswa')->with('pesan','Data Berhasil Dihapus !!!');
    }
}
