<?php

namespace App\Http\Controllers;

use App\Akun;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Session;

class AkunController extends Controller
{
	public function login(){
		if(Session::has('role')){
			return redirect(Session::get('role'));
		}
		return view('login');
	}

	public function logout(){
		Session::flush();
		return redirect('login');
	}

	public function doLogin(Request $req){
		$data = $req->all();
		$akun = Akun::where(['username'=>$data['username'],'password'=>$data['password']])->get();
		if (count($akun) == 0){
			return "false";
		}else{
			$nama = "";
			if($akun[0]->role == 'Mahasiswa'){
				$nama = $akun[0]->mahasiswa;
			}else if($akun[0]->role == 'Dosen'){
				$nama = $akun[0]->dosen;
			}else if($akun[0]->role == 'LAAK'){
				$nama = $akun[0]->laak;
			}else{
				$nama = "Admin";
			}
			Session::put(['username'=>$akun[0]->username,'person'=>$nama,'role'=>strtolower($akun[0]->role)]);
			return "true";
		}
	}
}
