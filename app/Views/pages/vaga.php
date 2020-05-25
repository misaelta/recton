<div class="container col-8"   style="border:solid 1px; border-radius:4px; background:#990100;margin-top:20px;">
<form  method="POST" action="criarVaga">
  
  <div class="form row"   >
   
    <div class="col-sm-6">
    <label  style="font-size:14px" for="colFormLabel" class="col-sm-3 col-form-label text-light"><b>Funcao</b></label>
      <textarea type="text" class="form-control" id="funcao" name="funcao" placeholder=""></textarea>
    </div>
  </div>



  <div class="form row">
    
    <div class="col-sm-6">
    <label style="font-size:14px" for="colFormLabel" class="col-sm-3 col-form-label text-light"><b>Salario</b></label>
      <input type="text" class="form-control" name="salario" id="salario" placeholder="">
    </div>
  </div>

  <div class="form row">
   
    <div class="col-sm-6">
    <label style="font-size:14px" for="colFormLabel" class="col-sm-3 col-form-label text-light"><b>Descricao</b></label>
      <textarea type="text"  name="descricao" class="form-control" id="descricao" placeholder=""> </textarea>
    </div>
  </div>


  <div class="form row">
  
    <div class="col-sm-6">
    <label style="font-size:14px" for="colFormLabel" class="col-sm-3 col-form-label text-light"><b>Requisitos</b></label>
      <textarea type="text"  name= " requisitos" class="form-control" id="requisitos" placeholder=""></textarea>
    </div>
  </div>


  <div class="form row">

    <div class="col-sm-6">
    <label style="font-size:14px" for="colFormLabel" class="col-sm-12 col-form-label text-light"><b>Carga Horária semanal</b></label>
      <input type="text"  name="cargahoraria" class="form-control" id="cargahoraria" placeholder="">
    </div>
  </div>


  <div class="form row" style="margin-bottom:3px;">
  
    <div class="col-sm-6">
    <label  style="font-size:14px" for="colFormLabel" class="col-sm-3 col-form-label text-light"><b>Turno</b></label>
      <input type="text"  name="turno" class="form-control" id="turno" placeholder="">
    </div>
  </div>

  <div class="form row">
    <div class="col-sm-6">
      <button style="margin-bottom:10px;margin-top:10px; " type="submit" class="btn btn-light text-primary">adicionar</button>
      <button  class="btn btn-danger" type="Reset"><a style="color:white" href="../empresa/minhasVagas">Cancelar</a></button>    </div>
  </div>

  
</form>


</div>