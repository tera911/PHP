<?php

class Photograph extends CI_Controller{
	
	function index(){
		$data['title'] = "Photograph...";
		$data['include'] = "photograph/photo";
		$this->load->vars($data);
		$this->load->view("photograph/template");
	}
}