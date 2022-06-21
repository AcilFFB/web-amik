<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MahasiswaModel;

class MahasiswaController extends Controller
{
    public function __construct(){
        $this->MahasiswaModel = new MahasiswaModel();
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
    }
}
