<?php





?>




<div style="margin-top:200px; display:flex;flex-direction:row; flex-wrap:wrap;justify-content:center;align-items:center">


<?php  foreach($candidatos as $can){                      ?>
<div class="card" style="width: 18rem; margin:7px; border:solid ">
  <div class="card-body">
    <h5 class="card-title">Sobre o Candidato</h5>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><?= $can['nome'] ?></li>
    <li class="list-group-item"><?= $can['formacao'] ?></li>
    <li class="list-group-item"><?= $can['idade'] ?> anos</li>
 
    
   

  </ul>
  <div class="card-body">
   <!-- Button trigger modal -->


<!-- Modal -->
<div style=" border:solid" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mais Detalhes</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

    
      <ul class="list-group list-group-flush">
      <label style="font-size:14px" for="colFormLabel" class="col-sm-6 col-form-label"><b>NOME</b></label>
      <li class="list-group-item"><?= $can['nome'] ?></li>
      <label style="font-size:14px" for="colFormLabel" class="col-sm-6 col-form-label"><b>fORMAÇÃO</b></label>
    <li class="list-group-item"><?= $can['formacao'] ?></li>
    <label style="font-size:14px" for="colFormLabel" class="col-sm-6 col-form-label"><b>IDADE</b></label>
    <li class="list-group-item"><?= $can['idade'] ?> anos</li>
    <label style="font-size:14px" for="colFormLabel" class="col-sm-6 col-form-label"><b>DATA NASCIMENTO</b></label>
    <li class="list-group-item"><?= $can['nascimento'] ?></li>
    <label style="font-size:14px" for="colFormLabel" class="col-sm-6 col-form-label"><b>SEXO</b></label>
    <li class="list-group-item"><?= $can['sexo'] ?></li>
    <label style="font-size:14px" for="colFormLabel" class="col-sm-6 col-form-label"><b>TELEFONE</b></label>
    <li class="list-group-item"><?= $can['telefone'] ?></li>
    <label style="font-size:14px" for="colFormLabel" class="col-sm-6 col-form-label"><b>NIVEL FORMAÇÃO</b></label>
    <li class="list-group-item"><?= $can['nivelformacao'] ?></li>
    <label style="font-size:14px" for="colFormLabel" class="col-sm-6 col-form-label"><b>CAPACITAÇÃO</b></label>
    <li class="list-group-item"><?= $can['capacitacao'] ?></li>
    <label style="font-size:14px" for="colFormLabel" class="col-sm-6 col-form-label"><b>CURSOS</b></label>
    <li class="list-group-item"><?= $can['cursos'] ?></li>
    <label style="font-size:14px" for="colFormLabel" class="col-sm-6 col-form-label"><b>CURRICULO ONLINE</b></label>
    <li class="list-group-item"><?= $can['curriculoOnline'] ?></li>
    <label style="font-size:14px" for="colFormLabel" class="col-sm-6 col-form-label"><b>HABILIDADES</b></label>
    <li class="list-group-item"><?= $can['habilidades'] ?></li>
  </ul>





       
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        
      </div>
    </div>
  </div>
</div>

    <a href="empresa/oferta?id=<?=$can['id']?>" class="card-link btn btn-success">Ofertar vaga</a>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Detalhes
</button>
  </div>
</div>
<?php   } ?>



</div>