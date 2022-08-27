<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DosenModel extends Model
{
    public function allData(){
        return DB::table('tbl_dosen')->get();
    }

    public function detailData($id_dosen){
        return DB::table('tbl_dosen')->where('id_dosen', $id_dosen)->first();
    }

    public function addData($data){
        return DB::table('tbl_dosen')->insert($data);
    }

    public function editData($id_dosen, $data){
        return DB::table('tbl_dosen')->where('id_dosen', $id_dosen)->update($data);
    }

    public function deleteData($id_dosen){
        return DB::table('tbl_dosen')->where('id_dosen', $id_dosen)->delete();
    }
}
