<?php 

namespace App\Controllers;
use CodeIgnite\Controller;
use App\Models\EmpresaModel;
class Empresa extends BaseController
{
	public function minhasvagas()
	{

        $model = new EmpresaModel; 

        $dados['vagas'] = $model->findAll();
		echo view('template/headerEmpresa');
        echo view('pages/vagasofertadas',$dados);
        echo view('template/footerEmpresa');
    }

   
public function  listvaga(){


    echo view('template/headerUser');
    echo view('pages/cursos');
    echo view('template/footerUser');

}

    public function novaVaga(){
        echo view('template/headerEmpresa');
        echo view('pages/vaga');
        echo view('template/footerEmpresa');
    }
    public function oferta(){

        $id= $_GET['id'];

        $dados['id']=['id'=>$id];
    
        echo view('pages/oferta',$dados);
     
    }

    public function criarVaga(){

        $model = new EmpresaModel; 

        $data=[

            'funcao'=>$this->request->getVar('funcao'),
			
			
			'requisitos'=>$this->request->getVar('requisitos'),
			
			'cargahoraria'=>$this->request->getVar('cargahoraria'),
            'turno'=>$this->request->getVar('turno'),
            'salario'=>$this->request->getVar('salario'),
            'descricao'=>$this->request->getVar('descricao')



        ];




        $model->insert($data);


        return redirect()->to('/recton/empresa/minhasvagas');



    }
    


}
