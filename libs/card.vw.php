<div class="row justify-content-center align-items-center">
  <div class="col-sm-6">
    <div class="card text-dark bg-light mb-3 border-dark mb-3">
      <div class="card-body " style="float: left">
        <h5 class="card-title">
          <p class="card-text text-success">Usuario: <?php echo $data['nombre']; ?></p>
        </h5>
        <p class="card-text"><?php echo $data['email']; ?></p>
        <p class="card-text"><?php echo $data['fecha']; ?></p>
        <p class="card-text">Comentario: <?php echo $data['contenido']; ?></p>
      </div>
    </div>
    </div>
  </div>
</div>
<br>

<!--<div class="card text-bg-light mb-3" style="width: 100%;">
  <div class="card-header"> <?php echo $data['nombre']." - ".$data['email']; ?> </div>
  <div class="card-body">
    <p class="card-text"><?php echo $data['contenido']; ?> </p>
    <p class="card-text"><small class="text-muted"><?php echo $data['fecha']; ?> </small></p>
  </div>
</div>-->
