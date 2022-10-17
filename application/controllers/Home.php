<?php

class Home extends CI_Controller {

    function index()
    {
        echo 'Belajar WEB Framework';
    }

    public function tampil()
    {
        return $this->load->view('v_tampil');
    }

	public function form()
	{
		echo 'Form input';
	}

}
