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
}
