<?php namespace App\Controllers;
use App\Models\UserModel;
class Rank extends BaseController
{

    
	public function index()
	{

        $model =  new UserModel; 

        $dados['usuarios'] = $model->where('tipo','1')
        ->findAll();
		echo view('template/headerEmpresa');
        echo view('pages/rank',$dados);
        echo view('template/footerEmpresa');
	}



}
