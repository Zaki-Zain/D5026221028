<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NilaiController extends Controller
{
    public function index2()
    {
    	// mengambil data dari table nilaikuliah
    	//$nilaikuliah = DB::table('nilaikuliah')->get();

        $nilaikuliah = DB::table('nilaikuliah')->paginate(10);

    	// mengirim data nilaikuliah ke view index
    	return view('index2',['nilaikuliah' => $nilaikuliah]);

    }

    public function tambah2()
    {
	    // memanggil view tambah
	    return view('tambah2');
    }

    public function store2(Request $request)
    {
	    // insert data ke table nilaikuliah
	    DB::table('nilaikuliah')->insert([
	    	'ID' => $request->id,
	    	'NRP' => $request->nrp,
	    	'NilaiAngka' => $request->nilaiangka,
	    	'SKS' => $request->sks
	    ]);
	    // alihkan halaman ke halaman nilaikuliah
	    return redirect('/nilaikuliah');
    }

    public function cari2(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$pegawai = DB::table('nilaikuliah')
		->where('nrp','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('index2',['nilaikuliah' => $nilaikuliah]);

	}
}



