<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index4(){
        $kategori = DB::table('kategori')->pluck('Nama', 'ID');

        return view('index4')->with('kategori', $kategori);
    }

    public function submitKategori(Request $request)
    {
        $request->validate([
            'index4' => 'required|exists:kategori,ID',
        ]);

        $selectedOptionId = $request->input('index4');

        return view('submitKategori')->with('selectedOptionId', $selectedOptionId);
    }
}
