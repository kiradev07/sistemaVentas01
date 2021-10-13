<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos/estilos.css">
    <title>Formulario de Registro</title>
  </head>
  <body>
   

      
      <div class="container">

      <h1>Formulario de Registro</h1>
     
<?php
include('menu.php')?>
<div class="container">


        <form class="formulario">

          <div class="form-group"> 
              <label for="nombre" class="control-label">nombre</label>
              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="ingrese su nombre">
          </div>    


          <div class="form-group"> <!-- Full Name -->
            <label for="paterno" class="control-label">apellido paterno</label>
            <input type="text" class="form-control" id="paterno" name="paterno" placeholder="ingrese su apellido paterno">
        </div>  

        <div class="form-group"> <!-- Full Name -->
          <label for="run" class="control-label">RUN</label>
          <input type="text" class="form-control" id="run" name="run" placeholder="ingrese su run">
      </div>  

      <div class="form-group"> <!-- Full Name -->
        <label for="edad" class="control-label">Edad:</label>
        <input type="number" class="form-control" id="edad" name="edad" placeholder="ingrese su edad">
    </div>  


      <div class="form-group"> <!-- Full Name -->
        <label for="materno" class="control-label">Fecha de Nacimiento</label>
        <input type="date" class="form-control" id="fecha" name="fecha">
    </div>  


          <div class="form-group"> <!-- Street 1 -->
              <label for="direccion" class="control-label">Direccion</label>
              <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingrese su direccion">
          </div>                    
                                  
                               
                                  
          <div class="form-group"> 
              <label for="ciudad" class="control-label">Ciudad</label>
              <select class="form-control" id="ciudad">
                  <option value="AL">Valparaiso</option>
                  <option value="AK">Santiago</option>
                  <option value="AZ">Quilpue</option>
              
              </select>    


              <div class="form-group"> 
                <label for="region" class="control-label">Region</label>
                <select class="form-control" id="region">
                    <option value="AL">Valparaiso</option>
                    <option value="AK">Santiago</option>
                    <option value="AZ">Quilpue</option>
                
                </select>   


                <div class="form-group"> 
                  <label for="comuna" class="control-label">Comuna</label>
                  <select class="form-control" id="comuna">
                      <option value="AL">Valparaiso</option>
                      <option value="AK">Santiago</option>
                      <option value="AZ">Quilpue</option>
                  
                  </select>   

          </div>
              
          <br>
          <br>
          
          <div class="form-group"> <!-- Submit Button -->
              <button  type="submit" class="btn btn-primary">Registrarme</button>
          </div>     
          
      </form>
       
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