<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {
	public function index()
	{
		$con = array(
			"content" => $this->Content()
			);
		$this->load->view('web', $con);
	}
	public function Result(){
		$con = array(
			"content" => $this->GetResult()
			);
		$this->load->view('web', $con);	
	}
	private function Content(){
		return $this->load->view('content', array(), true);
	}
	public function GetResult(){
		date_default_timezone_set("Asia/Jakarta");
		$tgl = date("Y-m-d");
		$where = "where tanggal = '$tgl'";
		$data = $this->mod_survei->GetResult();
		return $this->load->view('result', $data, true);
	}

}
