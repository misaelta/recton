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
    <div class="panel-heading">Cadastro de Empresa</div>
    
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
<input    type="hidden" id="tipo" name="tipo" value='2'>
<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" >Nome da Empresa<h11>*</h11></label>  
  <div class="col-md-8">
  <input id="nomeEmpresa" name="nomeEmpresa" placeholder="" class="form-control input-md"  type="text">
  </div>
</div>


<div class="form-group">
  <label class="col-md-2 control-label" >CNPJ<h11>*</h11></label>  
  <div class="col-md-8">
  <input id="cnpj" name="cnpj" placeholder="" class="form-control input-md"  type="text">
  </div>
</div>

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




<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-2 control-label" ></label>
  <div class="col-md-8">
    <button  class="btn btn-success" type="Submit">Cadastrar</button>
    <button  class="btn btn-danger" type="Reset"><a style="color:white" href="./">Cancelar</a></button>
  </div>
</div>




</fieldset>
</form>

</body>
</html>