<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<head>

    
</head>
<style>
h11 {
    color:red;
}

#logo {
        width:50%;
        height:50%;
}

.panel-heading{
    font-size:150%;
}




</style>
<body>

<form  method="POST"  action="user/create" class="form-horizontal">
<fieldset>
<div class="panel panel-primary">
    <div class="panel-heading">Cadastro de Candidato</div>
    
    <div class="panel-body">

<div class="form-group">
<!--
<div class="form-group">   
<div class="col-md-4 control-label">
    <img id="logo" src="http://blogdoporao.com.br/wp-content/uploads/3016/13/Faculdade-pitagoras.png"/>
</div>
<div class="col-md-4 control-label">
    <h1>Cadastro de Cliente</h1>
    
</div>
</div>
    -->
<div class="col-md-11 control-label">
        <p class="help-block"><h11>*</h11> Campo Obrigatório </p>
</div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" >Nome completo<h11>*</h11></label>  
  <div class="col-md-8">
  <input id="Nome" name="nome" placeholder="" class="form-control input-md"  type="text">
  </div>
</div>
<input  type="hidden" id="tipo" name="tipo" value='1'>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" >CPF <h11>*</h11></label>  
  <div class="col-md-2">
  <input id="cpf" name="cpf" placeholder="Apenas números" class="form-control input-md"  type="text" maxlength="11" >
  </div>
  
  <label class="col-md-1 control-label">Nascimento<h11>*</h11></label>  
  <div class="col-md-2">
  <input id="dtnasc" name="nascimento" placeholder="DD/MM/AAAA" class="form-control input-md"  type="text" maxlength="10" OnKeyPress="formatar('##/##/####', this)" onBlur="showhide()">
</div>

<!-- Multiple Radios (inline) -->

  <label class="col-md-1 control-label" for="radios">Sexo <h11>*</h11></label>
  <div class="col-md-4"> 
    <label  class="radio-inline" for="radios-0" >
      <input name="sexo" id="sexo" value="feminino" type="radio" >
      Feminino
    </label> 
    <label class="radio-inline" for="radios-1">
      <input name="sexo" id="sexo" value="masculino" type="radio">
      Masculino
    </label>
  </div>
</div>

<!-- Prepended text-->
<div class="form-group">
  <label class="col-md-2 control-label" >Telefone <h11>*</h11></label>
  <div class="col-md-2">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
      <input id="telefone" name="telefone" class="form-control" placeholder="XX XXXXX-XXXX"  type="text" maxlength="13" pattern="\[0-9]{2}\ [0-9]{4,6}-[0-9]{3,4}$"
      OnKeyPress="formatar('## #####-####', this)">
    </div>
  </div>
  
   
 </div> 

<!-- Prepended text-->
<div class="form-group">
  <label class="col-md-2 control-label" >Email <h11>*</h11></label>
  <div class="col-md-5">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
      <input id="email" name="email" class="form-control" placeholder="email@email.com"  type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" >
    </div>
  </div>
</div>


<div class="form-group">
  <label class="col-md-2 control-label" >Senha <h11>*</h11></label>
  <div class="col-md-5">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
      <input id="senha" name="senha" class="form-control" placeholder="Senha"  type="password" >
    </div>
  </div>
</div>


    
  </div>
  
  </div>

 
<div id="newpost">
   <div class="form-group">
    <div class="col-md-4 control-label">
        <h3>Área de formação</h3>
    </div>
    </div>
    
<div class="form-group">
<label class="col-md-3 control-label" >Qual seu nível de formação? </label>
  <div class="col-md-3">
    <select  id="nivelformacao" name="nivelformacao" class="form-control">
        <option value=""></option>
      
      <option value="Fundamental Incompleto">Fundamental Incompleto</option>
      <option value="Fundamental Completo">Fundamental Completo</option>
      <option value="Médio Incompleto">Médio Incompleto</option>
      <option value="Médio Completo">Médio Completo</option>
      <option value="Superior Incompleto">Superior Incompleto</option>
      <option value="Superior Completo">Superior Completo</option>
      <option value="Especialista">Especialista</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-3 control-label">Formação em: </label>  
  <div class="col-md-4">
  <input id="formacao" name="formacao" placeholder="" class="form-control input-md"  type="text">
    
  </div>



<!-- Multiple Radios (inline) -->

 
</div>

<div class="form-group">
<label class="col-md-3 control-label" >Possui cursos de Capacitação?</label> 
    <label  class="radio-inline" for="radios-0" >
      <input name="capacitacao" id="capacitacao" value="sim" type="radio" >
      Sim
    </label> 
    <label class="radio-inline" for="radios-1">
      <input name="capacitacao" id="capacitacao" value="nao" type="radio">
      Não
    </label>

</div>

<div class="form-group">
  

  <label class="col-md-3 control-label">Quais são seus cursos de capacitação?</label>  
  <div class="col-md-4">
  <input id="cursos"  name="cursos" type="text" placeholder="" class="form-control input-md" >
</div>
  
</div>


<div class="form-group">
    
  

  <label class="col-md-3 control-label" >Plataforma de currículo</label>  
  <div class="col-md-4">
  <input id="curriculoOnline"  name="curriculoOnline" type="text" placeholder="Github, Lattes, linkedin" class="form-control input-md" >
    
  
</div>


</div>

   <div class="form-group">
    <div class="col-md-3 control-label">
        <h3>Demais informações</h3>
    </div>
    </div>
    <div class="form-group">
  

  <label class="col-md-3 control-label">O que espera em uma vaga?</label>  
  <div class="col-md-4">
  <input id="sobreavaga"  name="sobreavaga" type="text" placeholder="" class="form-control input-md" >
    
  
</div>


</div>
<div class="form-group">
  

  <label class="col-md-3 control-label">Descreva suas habilidades</label>  
  <div class="col-md-4">
  <textarea  name="habilidades" id="habilidades" class="form-control" aria-label="With textarea"></textarea>
    
  
</div>

</div>
<div class="form-group">
  

  <label class="col-md-3 control-label">Descreva suas experiências</label>  
  <div class="col-md-4">
  <textarea  name="experiencia" id="experiencia" class="form-control" aria-label="With textarea"></textarea>
    
  
</div>
</div>


<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-3 control-label" ></label>
  <div class="col-md-8">
    <button  class="btn btn-success" type="Submit">Cadastrar</button>
    <button  class="btn btn-danger" type="Reset"><a style="color:white" href="./">Cancelar</a></button>
  </div>
</div>


</div>
</div>


</fieldset>
</form>

</body>
</html>