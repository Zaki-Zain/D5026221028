<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class SepedamotorController extends Controller
{
    public function index3()
    {
    	// mengambil data dari table sepedamotor
    	//$sepedamotor = DB::table('sepedamotor')->get();

        $sepedamotor = DB::table('sepedamotor')->paginate(10);

    	// mengirim data sepedamotor ke view index
    	return view('index3',['sepedamotor' => $sepedamotor]);

    }

    public function tambah3()
    {
	    // memanggil view tambah
	    return view('tambah3');
    }

    public function store3(Request $request)
    {
	    // insert data ke table sepedamotor
	    DB::table('sepedamotor')->insert([
	    	'KodeSepedaMotor' => $request->kodesepedamotor,
	    	'MerkSepedaMotor' => $request->merksepedamotor,
	    	'StockSepedaMotor' => $request->stocksepedamotor,
	    	'Tersedia' => $request->tersedia
	    ]);
	    // alihkan halaman ke halaman sepedamotor
	    return redirect('/sepedamotor');
    }

    public function cari3(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;

    		// mengambil data dari table pegawai sesuai pencarian data
		$pegawai = DB::table('sepedamotor')
		->where('kodesepedamotor','like',"%".$cari."%")
		->paginate();

    		// mengirim data pegawai ke view index
		return view('index3',['sepedamotor' => $sepedamotor]);

	}
}



