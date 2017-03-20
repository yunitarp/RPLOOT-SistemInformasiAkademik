<?php

namespace App\Http\Controllers;

use App\Akun;
use App\Dosen;
use App\Laak;
use App\Mahasiswa;
use App\Prodi;
use App\Kelas;
use App\Gedung;
use App\Ruangan;
use App\Matakuliah;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;

class AdminController extends Controller
{
	public function index(){
		return view('admin.dashboard.index');
	}

	public function form_inputakun(){
		$data['prodi'] = Prodi::all();
		$data['kelas'] = Kelas::all();
		return view('admin.akun.inputakundosen', $data);
	}

	public function form_inputprodi(){
		return view('admin.prodi.inputprodi');
	}

	public function form_inputkelas(){
		$data['prodi'] = Prodi::all();
		return view('admin.kelas.inputkelas',$data);
	}

	public function form_inputgedung(){
		return view('admin.gedung.inputgedung');
	}

	public function form_inputruangan(){
		$data['gedung'] = Gedung::all();
		return view('admin.ruangan.inputruangan',$data);
	}

	public function form_inputmatakuliah(){
		return view('admin.matakuliah.inputmatakuliah');
	}

	public function table_ubahkelas(){
		$kelas['kelas'] = Kelas::all();
		return view('admin.kelas.ubahkelas', $kelas);
	}

	public function table_ubahprodi(){
		$prodi['prodi'] = Prodi::all();
		return view('admin.prodi.ubahprodi', $prodi);
	}

	public function table_ubahgedung(){
		$gedung['gedung'] = Gedung::all();
		return view('admin.gedung.ubahgedung', $gedung);
	}	

	public function table_ubahruangan(){
		$data['ruangan'] = Ruangan::all();
		$data['gedung'] = Gedung::all();
		return view('admin.ruangan.ubahruangan', $data);
	}

	public function table_ubahakun(){
		$akun['akun'] = Akun::all();
		return view('admin.akun.ubahakun', $akun);
	}

	public function table_ubahmatakuliah(){
		$data['matakuliah'] = Matakuliah::all();
		return view('admin.matakuliah.ubahmatakuliah', $data);
	}

	public function inputakun(Request $req){
		$data = $req->all();
		$akun = Akun::create($data);
		if($data['role']=='Dosen'){
			$akun->dosen()->create($data);
		}
		else if($data['role']=='Mahasiswa'){
			$akun->mahasiswa()->create($data);
		}
		else{
			$akun->laak()->create($data);
		}
		return back();
	}

	public function inputprodi(Request $req){
		$data = $req->all();
		$prodi = Prodi::create($data);
		return back();
	}

	public function inputkelas(Request $req){
		$data = $req->all();
		$kelas = Kelas::create($data);
		return back();
	}

	public function inputgedung(Request $req){
		$data = $req->all();
		$gedung = Gedung::create($data);
		return back();
	}

	public function inputruangan(Request $req){
		$data = $req->all();
		$gedung = Ruangan::create($data);
		return back();
	}

	public function inputmatakuliah(Request $req){
		$data = $req->all();
		$matakuliah = Matakuliah::create($data);
		return back();
	}
}
