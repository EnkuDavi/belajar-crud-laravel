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

    public static function getById($id)
    {
        // $pertanyaan = DB::table('pertanyaan')->where('jawaban_id',$id)->first();
        $pertanyaan = DB::table('pertanyaan')
                    ->join('jawaban','pertanyaan.jawaban_id','=','jawaban.jawaban_id')
                    ->select('pertanyaan.id','pertanyaan.judul','pertanyaan.isi as tanya','jawaban.isi as jawab')
                    ->where('pertanyaan.jawaban_id',$id)
                    ->get();
        return $pertanyaan;
    }
}
