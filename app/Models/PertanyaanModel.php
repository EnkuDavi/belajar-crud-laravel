<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class PertanyaanModel {
    public static function getAll()
    {
        $pertanyaan = DB::table('pertanyaan')->get();
        return $pertanyaan;
    }

    public static function save($data)
    {
        $row_pertanyaan = DB::table('pertanyaan')->insert($data);
        return $row_pertanyaan;
    }
}