<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}


class DosenController extends Controller
{
    public function index(){
    	return "Halo ini adalah method index, dalam controller DosenController. - www.malasngoding.com";
    }

    public function formulir(){

    	return view('formulir');
    }

    public function showBlog()
    {
        $nama = "Budi";
        $alamat = "Sudirman";
        $umur = 19;
        return view('blog', ['nama' => $nama, 'alamat' => $alamat, 'umur' => $umur]);
    }

    public function proses(Request $request){
        $nama = $request->input('nama');
     	$alamat = $request->input('alamat');
        return "Nama : ".$nama.", Alamat : ".$alamat;

}
}

