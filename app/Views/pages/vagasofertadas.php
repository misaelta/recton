
<div style="margin-top:20px;margin-left:600px;">

<a  href="novaVaga" class="btn btn-primary text-light">Adicionar nova vaga</a>
<form style="margin-top:10px;" action="../login" method="post">
<button style="width:170px;" type="submit" class="btn btn-primary">Voltar</button>
</form>
</div>



<div style="margin-top:100px; display:flex;flex-direction:row; flex-wrap:wrap;justify-content:center;align-items:center">
<?php if(!empty($vagas)){ ?>

<?php foreach($vagas as $vaga){ ?>
<div class="card" style="width: 18rem; margin:7px; border:solid ">
  <div class="card-body" style=" border:solid;">
    <h5 class="card-title">Sobre a vaga</h5>
  </div>
  <ul class="list-group list-group-flush">
    <li style="font-size:12px" class="list-group-item"><?=$vaga['funcao'] ?></li>
    <li style="font-size:12px"class="list-group-item"><?=$vaga['salario'] ?></li>
    <li style="font-size:12px"class="list-group-item"><?=$vaga['descricao'] ?></li>
    <li style="font-size:12px"class="list-group-item"> <?=$vaga['cargahoraria'] ?></li>
    <li style="font-size:12px"class="list-group-item"> <?=$vaga['turno'] ?></li>
    <li style="font-size:12px"class="list-group-item"> <?=$vaga['requisitos'] ?></li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link btn btn-primary">Editar</a>
    <a href="#" class="card-link btn btn-danger">Deletar</a>
  </div>
</div>

<?php } ?>
<?php }else{ ?>
<h1 class="primary"> não há vagas cadastradas</h1>
<?php } ?>



</div>








