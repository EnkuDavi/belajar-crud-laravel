<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;

class PertanyaanController extends Controller
{
    public function index()
    {
        $pertanyaan = PertanyaanModel::getAll();
        return view('pertanyaan.index', compact('pertanyaan'));
    }

    public function create()
    {
        return view('pertanyaan.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        unset($data["_token"]);
        $pertanyaan = PertanyaanModel::save($data);
        if($pertanyaan){
            return view('pertanyaan.index');
        }
    }

    public function show($id)
    {
        $pertanyaan = PertanyaanModel::getById($id);
        return view('pertanyaan.show',compact('pertanyaan'));
    }
}
