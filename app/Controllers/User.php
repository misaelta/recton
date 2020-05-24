<?php 


namespace App\Controllers;
use CodeIgnite\Controller;
use App\Models\UserModel;

class User extends BaseController
{



    public function login(){
		$model = new  UserModel();
	
	
	$email=    	$_POST['email'];
	$senha =   	$_POST['senha'];
  

	$data = $model->where('email', $email)
                  ->first();
	
		
	
	echo view('pages/main',$data);
	
        
    }

	public function index()
	{




	   
	    $model  = new TrabalhosModel();
	    $resposta=$model->getTrabalhos();
	    
	    (!empty($resposta))?$dados=$resposta:$dados=[];
	    
	    $data=[
	        
	        'trabalhos'=>$dados
	        
	        ];
	   
	    
	    echo view('pages/listaTrabalhos',$data);
	   
	    
	}
	
	public function create(){
	   
		$model = new UserModel();
		$tipo=$this->request->getVar('tipo');

		
		if($tipo=='1'){
		
		$data=[
	        
	        'nome'=>$this->request->getVar('nome'),
		
			'senha'=>$this->request->getVar('senha'),
			'email'=>$this->request->getVar('email'),
			
			'tipo'=>$this->request->getVar('tipo')
	        
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
