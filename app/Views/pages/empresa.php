<?php

$email = $_SESSION['email'];




?>


<div style="margin-top:200px; display:flex;flex-direction:row; flex-wrap:wrap;justify-content:center;align-items:center">


<?php  foreach($candidatos as $can){                      ?>
<div class="card" style="width: 18rem; margin:7px; ">
  <div class="card-body">
    <h5 class="card-title">Sobre o Candidato</h5>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><?= $can['nome'] ?></li>
    <li class="list-group-item"><?= $can['formacao'] ?></li>
    <li class="list-group-item"><?= $can['idade'] ?> anos</li>
  </ul>
  <div class="card-body">
    <a href="#" class="card-link btn btn-primary">Detalhes</a>
    <a href="#" class="card-link btn btn-success">Ofertar vaga</a>
  </div>
</div>
<?php   } ?>



</div>