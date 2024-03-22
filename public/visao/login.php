<form role="form" class="mt-5" action="usuario_route.php?fun=login" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="usuarioInput">Usuario</label>
    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp" placeholder="Entre com o usuario">
    <small id="emailHelp" class="form-text text-muted">Entre com o usuario fornecido pelo sistema</small>
  </div>
  <div class="form-group">
    <label for="passwordInput">Password</label>
    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>