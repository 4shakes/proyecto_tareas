<?php include("db.php"); ?>
<?php include('includes/header.php');
?>
<div class="container mt-5">
  <div class="row">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
      <div class="card card-signin my-5">
        <div class="card-body">
          <h5 class="card-title text-center">Login</h5>
          <hr class="my-4">
          <form class="form-signin" method="post" action="login.php">
            <div class="form-label-group">
              <input type="text" id="inputText" class="form-control" name="user" placeholder="Nombre de usuario" required autofocus>
              <label for="inputText">Usuario</label>
            </div>
            <!-- <div class="form-label-group">
              <input type="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
              <label for="inputEmail">Email</label>
            </div> -->

            <div class="form-label-group">
              <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Contraseña" required>
              <label for="inputPassword">Password</label>
            </div>

            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">entrar</button>


          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include('includes/footer.php');
?>