<?php
  error_reporting(E_ALL);
  ini_set('display_error', 1);

  $data = $_POST;


  if($data['password'] != $data['password2']){
    echo "<h1>Las contraseñas no coinciden</h1>";
    header( "refresh:2; url=registrarse.php");
  }else{
      $data ['password'] = password_hash($data ['password'], PASSWORD_DEFAULT);
      $data['habilitado'] = true;
  }
  unset($data['password2']);


  $enlace = mysqli_connect("localhost", "root", "", "curso_backend");

  if (!$enlace) {
      echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
      echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
      echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
      exit;
  }

  // echo json_encode($data);
$dni= $data['dni'];
$nombre= $data['nombre'];
$apellido= $data['apellido'];
$email= $data['email'];
$telefono= $data['telefono'];
$calle= $data['calle'];
$nro_calle= $data['nro_calle'];
$ciudad= $data['ciudad'];
$cod_postal= $data['cod_postal'];
$password= $data['password'];

  $sql = "INSERT INTO usuarios (dni, nombre, apellido, email, telefono, calle, nro_calle, ciudad, cod_postal, password)
  VALUES ('$dni', '$nombre', '$apellido', '$email','$telefono','$calle','$nro_calle','$ciudad','$cod_postal','$password')";


  if(mysqli_query($enlace, $sql)){
    echo "Usuario registrado correctamente!";
  }else{
    echo "Error: " . $sql . "<br>" . mysqli_error($enlace);
  }
 ?>
