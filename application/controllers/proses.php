<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proses extends CI_Controller {
	public function AddSurvei(){
		date_default_timezone_set("Asia/Jakarta");
		$tgl = date("Y-m-d");
		$data = array(
			"tanggal" => $tgl,
			"respon" => $_POST['get']
		);
		$this->mod_survei->InsertData('data', $data);
	}
}
