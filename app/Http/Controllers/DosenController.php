<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DosenModel;

class DosenController extends Controller
{
    public function __construct(){
        $this->DosenModel = new DosenModel();
        $this->middleware('auth');
    }  

    public function index(){
        $data = [
            'dosen' => $this->DosenModel->allData(),
        ];
        return view('v_dosen', $data);
    }

    public function detail($id_dosen){
        if (!$this->DosenModel->detailData($id_dosen)){
            abort(404);
        }
        $data = [
            'dosen' => $this->DosenModel->detailData($id_dosen),
        ];
        return view('v_detaildosen', $data);
    }

    public function add(){
        return view('v_adddosen');
    }

    public function insert(){
        Request()->validate([
            'nama_dosen' => 'required|unique:tbl_dosen,nama_dosen',
            'matkul' => 'required',
            'jabatan' => 'required',
        ],[
            'nama_dosen.required' => 'Tidak Boleh Kosong !!',
            'nama_dosen.unique' => 'Nama Sudah Ada !!',
            'matkul.required' => 'Tidak Boleh Kosong !!',
            'jabatan.required' => 'Tidak Boleh Kosong !!',
        ]);

        $data = [
            'nama_dosen' => Request()->nama_dosen,
            'matkul' => Request()->matkul,
            'jabatan' => Request()->jabatan,
            //'created_at' => \Carbon\Carbon::now()
        ];

        $this->DosenModel->addData($data);
        return redirect()->route('dosen')->with('pesan','Data Berhasil Ditambahkan !!!');
    }

    public function edit($id_dosen){
        if (!$this->DosenModel->detailData($id_dosen)){
            abort(404);
        }
        $data = [
            'dosen' => $this->DosenModel->detailData($id_dosen),
        ];
        return view('v_editdosen', $data);
    }

    public function update($id_dosen){
        Request()->validate([
            'nama_dosen' => 'required',
            'matkul' => 'required',
            'jabatan' => 'required',
        ],[
            'nama_dosen.required' => 'Tidak Boleh Kosong !!',
            'matkul.required' => 'Tidak Boleh Kosong !!',
            'jabatan.required' => 'Tidak Boleh Kosong !!',
        ]);

        $data = [
            'nama_dosen' => Request()->nama_dosen,
            'matkul' => Request()->matkul,
            'jabatan' => Request()->jabatan,
        ];

        $this->DosenModel->editData($id_dosen, $data);
        return redirect()->route('dosen')->with('pesan','Data Berhasil Dirubah !!!');
    }

    public function delete($id_dosen){
        $this->DosenModel->deleteData($id_dosen);
        return redirect()->route('dosen')->with('pesan','Data Berhasil Dihapus !!!');
    }
}
