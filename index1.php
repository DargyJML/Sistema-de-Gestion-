<?php
require './Config/conexion.php';

$db = new Database();
$db->conectar();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=}, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
<div style="background-color: #74749E; width: 100%; height: 90px; ">
  <!-- div con color --> 
</div>

<main class="container contenedor">
    <div> <h1 style="color: #FB9F0B; text-align: center; margin-top: 20px;">SISTEMA DE GESTION DE SOPORTE TECNICO </h1> </div>

    <div style="display:flex; justify-content:center;  ">
    
        <img src="./Images/./Frame5.png" alt="imagen" />
    
    </div>
    <div style=" display:flex; margin-left: 10px; width: 55%; margin: auto; justify-content: space-around; margin-bottom: 40px;">
     <a href="./Views/./formulario.php"> <button  type="button" class="btn btn-secondary btn-lg" style="background-color: #74749E;" > <img src="./Images/./calendario2.png" alt="icono calendario" /> Agenda tu cita</button> </a> 
     <a> <button type="button" class="btn btn-secondary btn-lg" style="background-color: #74749E; height: 50px;" >Consulta tu cita</button> </a> 
    </div>
    </main>
    <div style="background-color: #74749E; width: 100%; height: 90px; ">
  <!-- div con color --> 
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>    
</body>
</html>