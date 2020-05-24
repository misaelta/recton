<?php 

namespace  App\Models;

use CodeIgniter\Model;

class EmpresaModel extends Model {
    
    protected $table="vaga";
    protected $primaryKey="id";
    protected $allowedFields=[


  
];
    
    
    public function getMinhasVagas(){
        
       
            
            return $this->findAll();
            
        
        
 
        
    }
    
}








?>