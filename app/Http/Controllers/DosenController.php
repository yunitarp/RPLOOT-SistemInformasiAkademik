<?php
namespace App\Http\Controllers;

use App\Mahasiswa;
use App\Jadwal;
use App\Presensi;
use App\Matakuliah;
use App\Nilai;
use App\Kelas;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponses;
use Session;


class DosenController extends Controller
{
    public function index(){
		return view('dosen.dashboard.index');
	}

	public function jadwaldosen(){
		$data['jadwal'] = Jadwal::where(['dosen_id'=>Session::get('person')->id])->get();
		return view('dosen.registerasi.jadwaldosen', $data);
	}

	public function form_inputnilai(){
		$data['matkul'] = Jadwal::where(['dosen_id'=>Session::get('person')->id])->get();
		return view('dosen.nilai.inputnilai',$data);
	}

	public function pilihnilai(Request $req){
		$data = $req->all();
		$nilai = Nilai::where(['mahasiswa_id'=>$data['mahasiswa_id'],'matakuliah_id'=>$data['matakuliah_id']])->get();
		if (count($nilai) == 0){
			$nilai = Nilai::create(['mahasiswa_id'=>$data['mahasiswa_id'],'matakuliah_id'=>$data['matakuliah_id'],'uas'=>0,'uts'=>0,'tugas'=>0
				,'kuis'=>0,'tubes'=>0]);
		}else{
			$nilai = $nilai[0];
		}
		return $nilai;
	}

	public function insertnilai(Request $req){
		$data = $req->all();
		$nilai = Nilai::find($data['nilai_id']);
		$nilai->uas = $data['uas'];
		$nilai->uts = $data['uts'];
		$nilai->tugas = $data['tugas'];
		$nilai->tubes = $data['tubes'];
		$nilai->kuis = $data['kuis'];
		$nilai->update();
	}

	public function form_inputpresensi(){
		$data['jadwal'] = Jadwal::where(['dosen_id'=>Session::get('person')->id])->get();
		return view('dosen.presensi.inputpresensi', $data);
	}

	public function pilihmahasiswa(Request $req){
		$data_masuk = $req->all();
		$data = Mahasiswa::where(['kelas_id'=>$data_masuk['id']])->get();
		return $data;
	}

	public function pilihkelas(Request $req){
		$data_masuk = $req->all();
		$data = Jadwal::with('kelas')->where(['matakuliah_id'=>$data_masuk['id']])->get();
		return $data;
	}

	public function print_jadwal(){
		$data['jadwal'] = Jadwal::where(['dosen_id'=>Session::get('person')->id])->get();
		return view('dosen.registerasi.printjadwaldosen', $data);
	}

	public function inputpresensi(Request $req){
		$data = $req->all();
		foreach ($data['mahasiswa_id'] as $i => $isi) {
			$presensi = new Presensi;
			$presensi->jadwal_id = $data['jadwal_id'];
			$presensi->mahasiswa_id = $isi;
			$presensi->tanggal = date('Y-m-d', strtotime($data['tanggal']));
			$presensi->status = $data['status'][$i];
			$presensi->save();
		}
		return back();
	}
}
