<?php 


namespace App\Controllers;
use CodeIgnite\Controller;
use App\Models\UserModel;
use App\Models\EmpresaModel;
class User extends BaseController
{

public function voltarlogin(){

	$model = new  UserModel();
	
	$dados['candidatos'] = $model->where('tipo',1)
	->findAll();
	
	echo view('template/headerEmpresa');
	echo view('pages/empresa',$dados);
	echo view('template/footerEmpresa');

}

public function login2(){
    
	$modelEmpresa = new EmpresaModel; 
	$dadosEmpresa['vagas'] = $modelEmpresa->findAll();
	echo view('template/headerUser');
	echo view('pages/candidato',$dadosEmpresa);
	echo view('template/footerUser');


}

    public function login(){
		$session = \Config\Services::session();
		$model = new  UserModel();
		$modelEmpresa = new EmpresaModel; 

        $dadosEmpresa['vagas'] = $modelEmpresa->findAll();
	if(!empty($_POST['email'])){
	$email=    	$_POST['email'];
	$senha =   	$_POST['senha'];
  

	$data = $model->where('email', $email)
				  ->first();


	$dados['candidatos'] = $model->where('tipo',1)
				  ->findAll();
				  
 

	  $newdata = [
		'id'  => $data['id'],
		'email'     => $data['email'],
		'logado' => TRUE
	];
			
	$session->set($newdata);

	
	$tipo = $data['tipo'];
	
	if($tipo == 1){
        echo view('template/headerUser');
		echo view('pages/candidato',$dadosEmpresa);
		echo view('template/footerUser');

	}else{
		echo view('template/headerEmpresa');
		echo view('pages/empresa',$dados);
		echo view('template/footerEmpresa');
	}

}else{

	$dados['candidatos'] = $model->where('tipo',1)
	->findAll();

	echo view('template/headerEmpresa');
	echo view('pages/empresa',$dados);
	echo view('template/footerEmpresa');


}
		
	
	
	
        
    }

	public function index()
	{




	   
	   
	    
	}
	
	public function create(){
	   
		$model = new UserModel();
		$tipo=$this->request->getVar('tipo');

		
		if($tipo=='1'){
		
		$data=[
			'nome'=>$this->request->getVar('nome'),
			
			
			'formacao'=>$this->request->getVar('formacao'),
			
			'tipo'=>$this->request->getVar('tipo'),
            'idade'=>$this->request->getVar('idade')


	        
		];
	}else{

        $data=[
	        
			'nomeEmpresa'=>$this->request->getVar('nomeEmpresa'),
			'cnpj'=>$this->request->getVar('cnpj'),
			'email'=>$this->request->getVar('email'),
			'senha'=>$this->request->getVar('senha'),
			'tipo'=>$this->request->getVar('tipo')
	        
		];


	}

	    $model->insert($data);
		
		





	    
		return redirect()->to('../recton');
        
	}

   

	
	public function deletar($id=null){
	      $model  = new TrabalhosModel();
	   $model->delete($id);
	     return redirect()->to('../trabalhos');
	    
	}
	
		public function editar($id){
		    
		    
		    
		    
	    $model  = new TrabalhosModel();
	    $resposta['trabalhos']=$model->getTrabalhos($id);
	  
	    $data=[
	          "titulo"=>$resposta['trabalhos']['titulo'],
	           "autor"=>$resposta['trabalhos']['autor'],
	           "tema"=>$resposta['trabalhos']['tema']
	        
	        
	        ];
	        
	    
	    
	    echo view('pages/adicionarTrabalho',$data);
	    
	}
	
	public function store(){

	    helper('form');
	    
	    $model = new TrabalhosModel;
	    
	   
	    
	    $model->save([
	        'id' =>$this->request->getVar('id'),
	        'titulo'=>$this->request->getVar('titulo'),
	        'tema'=>$this->request->getVar('tema'),
	        'autor'=>$this->request->getVar('autor')
	        
	        ]);
	    
return redirect()->to('../trabalhos');
	
	               
	      
	}


}
