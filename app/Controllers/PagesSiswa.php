<?php

namespace App\Controllers;

use App\Models\ModelSiswa;

class PagesSiswa extends BaseController
{
	// public function index()
	// {
	// 	return view('welcome_message');
	// }
	public function login()
	{
		return view('login');
	}

	// SISWA
	//protected $siswa;
	// public function __construct()
	// {
	// 	$this->siswa = new ModelSiswa();
	// }
	public function indexSiswa()
	{
		$this->siswa = new ModelSiswa();
		$data['judul'] = 'Home | SINOFAK';
		$data['content'] = 'index';
		$data['identitas'] = $this->siswa->getSiswa();
		return view('siswa/Index', $data);


		// $this->siswa = new ModelSiswa();
		// $cek = $this->siswa->getSiswa();
		// dd($cek);
	}
	public function jadwalSiswa()
	{
		$data['judul'] = 'Jadwal Pelajaran | SINOFAK';
		$data['content'] = 'jadwal';
		return view('siswa/jadwal', $data);
	}
	public function layananSiswa()
	{
		$data['judul'] = 'Layanan | SINOFAK';
		$data['content'] = 'layanan';
		return view('siswa/layanan', $data);
	}
	public function nilaiSiswa()
	{
		$data['judul'] = 'Nilai | SINOFAK';
		$data['content'] = 'nilai';
		return view('siswa/nilai', $data);
	}
	public function presensiSiswa()
	{
		$data['judul'] = 'Presensi | SINOFAK';
		$data['content'] = 'presensi';
		return view('siswa/presensi', $data);
	}
}
