<?php

namespace App\Models;
use Illuminate\Support\Facades\DB;

class JawabanModel {
    public static function getAll()
    {
        $jawaban = DB::table('jawaban')->get();
        return $jawaban;
    }

}