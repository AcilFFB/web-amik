<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MahasiswaModel extends Model
{
    public function allData(){
       return DB::table('tbl_mahasiswa')->get();
    }
}
