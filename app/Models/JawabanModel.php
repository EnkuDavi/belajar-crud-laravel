<?php

namespace App\Models;
use illuminate\Support\Facades\DB;

class JawabanModel {
    public function getAll()
    {
        DB::table('jawaban')->get();
        DB::where('')
        return $jawaban;
    }

    public function save($data)
    {
        $row_jawaban = DB::table('jawaban')->insert($data); 
        return $row_jawaban;   
    }
}