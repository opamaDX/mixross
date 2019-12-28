<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main_ctrl extends CI_Controller {

	public function index()
	{
		$this->load->view('home_view');
	}

	public function load_page_cando() {
		$this->load->view('cando_view');
	}

	public function load_page_what_is() {
		$this->load->view('what_is_view');
	}

	public function load_page_event() {
		$this->load->view('event_view');
	}

	public function load_page_question() {
		$this->load->view('question_view');
	}

	public function load_page_sign_in() {
		$this->load->view('sign_in_view');
	}

	public function load_page_sign_up() {
		$this->load->view('sign_up_view');
	}

}
