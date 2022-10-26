<?php
  $res=mostrarTodos($link);
?>
<br>
<ul class="nav nav-pills nav-fill">
     <li class="nav-item">
       <h3 style="color: #EFAD75">COMENTARIOS</h3>
     </li>
     <li class="nav-item">
        <a id="btnNew" href="index.php?mod=new" class="btn btn-warning">Nuevo +</a>
     </li>
</ul>
<br>
<?php
while ($data=mysqli_fetch_array($res)){
  include ('libs/card.vw.php');
}
?>
