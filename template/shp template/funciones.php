<?php

  function traer_productos(){

      $productos = [
        ["nombre" => "Papas Fritas", "precio" => 100, "src" => "img/papas-fritas.png"],
        ["nombre" => "Ensalada", "precio" => 300, "src" => "img/ensalada.png"],
        ["nombre" => "Pizza", "precio" => 500, "src" => "img/pizza.png"],
        ["nombre" => "Sandwich", "precio" => 300, "src" => "img/sandwich.png"],
        ["nombre" => "Hamburguesa", "precio" => 350, "src" => "img/hamburguesa.png"],
        ["nombre" => "Galletitas", "precio" => 200, "src" => "img/galletitas.png"],
        ["nombre" => "Pancho", "precio" => 200, "src" => "img/pancho.png"],
        ["nombre" => "Dona", "precio" => 100, "src" => "img/dona.png"],
      ];

      return($productos);

  }

 ?>
