
<div align="center" style="  border:solid; margin-left:430px;margin-top:10px; width:500px; background:lightblue;"> 

<h2> Rank dos candidatos  </h2>
</div>

<div class="container col-5" style="margin-top:30px;">
<div class="section">
<?php  $i=0 ?>
<ul class="list-group" style=" border:solid">
    <?php foreach($usuarios as $user){  $i++?>
         
  <li class="list-group-item  d-flex justify-content-between align-items-center ">
      <?= $user['nome'] ?>
      
    <span class="badge badge-primary badge-pill"><?=$i?></span>
  
  </li>
    <?php  } ?>
</ul>

</div>
</div>