<?php
  error_reporting(E_ALL);
  ini_set('display_error', 1);

  $data = $_POST;

  $enlace = mysqli_connect("localhost", "root", "", "curso_backend");

  if (!$enlace) {
      echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
      echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
      echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
      exit;
  }

  // echo json_encode($data);

  $sql = "SELECT * FROM usuarios WHERE dni= '".$data["dni"]."'";

  $result = mysqli_query($enlace, $sql);

  if (mysqli_num_rows($result) > 0){
    while($usuario = mysqli_fetch_assoc($result)){
      echo "Dni: " . $usuario["dni"] . " Nombre: " . $usuario["nombre"] . " " . $usuario["apellido"] . "<br>";
      $hash = $usuario['password'];

      if (password_verify($data["password"], $hash)){
        echo "La contraseña es válida!";
      }else{
        echo "La contraseña no es váida!";
      }
    }
  }else{
    echo "Su usuario no se encuentra registrado";
  }
 ?>
