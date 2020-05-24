<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		echo view('template/header');
        echo view('pages/home');
        echo view('template/footer');
	}

	public function cadastro()
	{
		
        echo view('pages/cadastro');
        
	}
	public function cadastroEmpresa()
	{
		
        echo view('pages/cadastroEmpresa');
        
	}

}
