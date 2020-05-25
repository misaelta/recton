<?php namespace App\Controllers;

class Cursos extends BaseController
{
	public function index()
	{
		echo view('template/headerUser');
        echo view('pages/cursos');
        echo view('template/footerUser');
	}



}
