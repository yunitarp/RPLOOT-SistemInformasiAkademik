<?php

namespace App\Http\Controllers;

use App\Matakuliah;
use App\Ruangan;
use App\Dosen;
use App\Kelas;
use App\Jadwal;
use App\Mahasiswa;
use Illuminate\Http\Request;

class LaakController extends Controller
{
    public function index(){
		return view('laak.dashboard.index');
	}

	public function table_mahasiswa(){
		$data['mahasiswa'] = Mahasiswa::all();
		return view('laak.registerasi.datamahasiswa', $data);
	}

	public function form_inputjadwal(){
		$data['matakuliah'] = Matakuliah::all();
		$data['ruangan'] = Ruangan::all();
		$data['dosen'] = Dosen::all();
		$data['kelas'] = Kelas::all();
		return view('laak.registerasi.inputjadwal', $data);
	}

	public function inputjadwal(Request $req){
		$data = $req->all();
		$jadwal = Jadwal::create($data);
		return back();
	}
}
