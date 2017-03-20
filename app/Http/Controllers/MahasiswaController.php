<?php

namespace App\Http\Controllers;

use App\Nilai;
use App\Matakuliah;
use App\Presensi;
use App\Jadwal;
use Illuminate\Http\Request;
use Session;

class MahasiswaController extends Controller
{
     public function index(){
		return view('mahasiswa.dashboard.index');
	}
	public function jadwal_mahasiswa(){
		$data['jadwal'] = Jadwal::where(['kelas_id'=>Session::get('person')->kelas_id])->get();
		return view('mahasiswa.registerasi.jadwalmahasiswa', $data);
	}

	public function table_nilai(){
		$data['nilai'] = Nilai::where(['mahasiswa_id'=>Session::get('person')->id])->get();
		return view('mahasiswa.nilai.lihatnilai', $data);
	}

	public function print_nilai(){
		$data['nilai'] = Nilai::where(['mahasiswa_id'=>Session::get('person')->id])->get();
		return view('mahasiswa.nilai.printnilai', $data);
	}

	public function print_jadwal(){
		$data['jadwal'] = Jadwal::where(['kelas_id'=>Session::get('person')->kelas_id])->get();
		return view('mahasiswa.registerasi.printjadwalmahasiswa', $data);
	}

	public function table_presensi(){
		$data['presensi'] = Presensi::with('jadwal.matakuliah')->where(['mahasiswa_id'=>Session::get('person')->id])->get();
		return view('mahasiswa.presensi.lihatpresensi', $data);
	}
}
