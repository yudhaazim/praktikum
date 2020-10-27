<?php

class cetak extends CI_Controller {
	public function index($url_nim='',$url_jur='')
	{
		$data['nama'] = 'Yudha';
		$data['umur'] = '17';
		$data['nim'] = $url_nim;
		$data['jurusan'] = $url_jur;

	$this->load->view('mahasiswa/v_index', $data);

	}
}
