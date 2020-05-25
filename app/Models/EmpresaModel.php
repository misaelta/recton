<?php 

namespace  App\Models;

use CodeIgniter\Model;

class EmpresaModel extends Model {
    
    protected $table="vaga";
    protected $primaryKey="id";
    protected $allowedFields=[
      
        'funcao',
        'salario',
        'cargahoraria',
        'requisitos',
        'descricao',
        'turno'

  
];
    
    
    public function getMinhasVagas(){
        
       
            
            return $this->findAll();
            
        
        
 
        
    }
    
}








?>