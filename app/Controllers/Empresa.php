<?php namespace App\Controllers;

class Empresa extends BaseController
{
	public function minhasvagas()
	{
		echo view('template/headerEmpresa');
        echo view('pages/vaga');
        echo view('template/footerEmpresa');
    }
    

    public function criarVaga(){


        return redirect()->to('../empresa/minhasvagas');



    }
    


}
