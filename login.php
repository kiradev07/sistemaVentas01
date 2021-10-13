<!doctype html>
<html lang="ess">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

   
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="estilos/estilos.css">
    <title>Inicio de Sesion</title>
  </head>
  <body>

  <a href="https://api.whatsapp.com/send?phone=56979486717&text=Hola%20quisiera%20saber%20mas%20sobre%20las%20clases%20ofrecidas" class="float" target="_blank">
<i class="fa fa-whatsapp my-float"></i>
</a>
<?php include('wath.php')?>

   

<div class="container">

<h1>Inicio de Sesion</h1>

<?php

include('menu.php')?>


<div class="wrapper fadeInDown">
      <div id="formContent">
        
        <div class="fadeIn first">
          <img src="recursos/multimedia/usuario.png" width="80" height="80" />
        </div>
    
        <!-- Login Form -->
        <form>
          <input type="text" id="login" class="fadeIn second" name="login" placeholder="ingrese su usuario">

          <input type="password" id="password" class="fadeIn third" name="password" placeholder="ingrese su contraseña">
          <input type="submit" class="fadeIn fourth" value="Inicia Sesion">
        </form>
    
        <!-- Remind Passowrd -->
        <div id="formFooter">
          <a class="underlineHover" href="formulario_registro.php">¿no tienes cuenta? registrate</a>
        </div>
    
      </div>
    </div>


</div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>