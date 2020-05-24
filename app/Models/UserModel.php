<?php 

namespace  App\Models;

use CodeIgniter\Model;

class UserModel extends Model {
    
    protected $table="candidato";
    protected $primaryKey="id";
    protected $allowedFields=[
    'nome',
    'cpf',
    'nascimento',
    'sexo',
    'telefone',
    'senha',
    'email',
    'nivelformacao',
    'formacao',
    'capacitacao',
    'cursos',
    'curriculoOnline',
    'sobreavaga',
    'habilidades',
    'experiencia',
    'tipo',
    'nomeEmpresa',
    'cnpj'
];
    
    
    public function getTrabalhos(){
        
       
            
            return $this->findAll();
            
        
        
 
        
    }
    
}








?>