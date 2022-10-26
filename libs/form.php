<br>
<div class="container h-80 w-50 text-dark bg-light mb-3 border-dark mb-3">
    <div class="row h-80 justify-content-center align-items-center">
        <div class="col-5 col-md-8 col-lg-6">
          <form class="" action="index.php" method="post">
            <br>
            <input class="form-control" type="hidden" name="id" value="-1">
            <br>
            <!--Usuario-->
            <label for="user">Nombre:</label><input style=" margin-bottom: 15px" class="form-control" type="text" name="user" value="">
            <br>
            <!--Email-->
            <label for="email">Email:</label><input style=" margin-bottom: 15px" class="form-control" type="text" name="email" value="">
            <br>
            <!--Comentario-->
            <label for="message">Mensaje:</label><textarea style="margin-bottom: 25px" class="form-control" type="text" name="message" value=""></textarea>
            <br>
            <ul class="nav nav-pills nav-fill">
              <li class="nav-item">
                <!--Boton ENVIAR-->
                <button type="submit" name="enviar" class="btn btn-warning" style="margin-right: 5px" href="index.php">Enviar <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-send-fill" viewBox="0 0 16 16">
                   <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z"/></svg></button>
              </li>
          </ul>
          <br>
</form>
</div>
</div>
</div>
