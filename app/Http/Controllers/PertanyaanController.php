<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PertanyaanModel;

class PertanyaanController extends Controller
{
    public function index() {
        $pertanyaan = PertanyaanModel::getAll();
        // dd($pertanyaan);
        return view('Tugas14.pertanyaan', compact('pertanyaan'));
    }

    public function create() {
        return view('Tugas14.form');
    }

    public function store(Request $request) {
        $data = $request->all();
        // dd($data);
        unset($data["_token"]);
        PertanyaanModel::save($data);
        $pertanyaan = PertanyaanModel::getAll();
        return view('Tugas14.pertanyaan', compact('pertanyaan'));
    }
}
