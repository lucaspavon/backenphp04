<!DOCTYPE html>
<html lang="en">
    <head>
      <?php include('head.php') ?>
    </head>
    <body id="page-top">
        <!-- Navigation-->
          <?php include('navbar.php') ?>
        <!-- Masthead-->
        <header class="masthead-login">
            <div class="container d-flex h-100 align-items-center containerRegistro">
              <div class="col-8 offset-2 mt-5">
                <div class="text-left">
                    <h1 class="my-0 txt-black mb-4 mt-5">Registro</h1>
                    <form method="post" action="registro.php">
                      <div class="row mt-5">
                        <div class="col mt-3">
                          <input type="text" name="dni" class="form-control mb-4" placeholder="DNI">
                          <input type="text" name="nombre" class="form-control mb-4" placeholder="Nombre">
                          <input type="text" name="apellido" class="form-control mb-4" placeholder="Apellido">
                          <input type="email" name="email" class="form-control mb-4" placeholder="Email">
                          <input type="text" name="telefono" class="form-control mb-4" placeholder="Teléfono">
                          <input type="text" name="calle" class="form-control mb-4" placeholder="Calle">
                        </div>
                        <div class="col mt-3">
                          <input type="text" name="nro_calle" class="form-control mb-4" placeholder="Nº Casa">
                          <input type="text" name="ciudad" class="form-control mb-4" placeholder="Ciudad">
                          <input type="text" name="cod_postal" class="form-control mb-4" placeholder="Código Postal">
                          <input type="password" name="password" class="form-control mb-4" placeholder="Contraseña">
                          <input type="password" name="password2" class="form-control mb-4" placeholder="Confirmar Contraseña">
                        </div>
                      </div>
                      <button type="submit" class="btn btn-login btn-block">Registrarse</button>
                      <h5 class="mt-3">Ya tenés una cuenta? <a href="login.php">Ingresá</a></h5>
                    </form>
                </div>
              </div>


            </div>
        </header>

        <!-- Footer-->
        <?php include('footerRegistro.php') ?>

        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
