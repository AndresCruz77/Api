<?php
require_once "funciones/utility.php";
$vDatos = jsonDataId($_GET["id"]);
$vDatos = stdClass_Array($vDatos);
?>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title></title>
  </head>
  <body>
    <div class="container">
      <div class="card">
        <div class="card-header">
          <h3>Ver Jugador: <b><?php echo $vDatos["first_name"] . "  " . $vDatos["last_name"]; ?></b></h3>
        </div>
        <table class="table" border="1">
          <thead>
            <tr>
              <th colspan="5">Player</th>
              <th colspan="6">Team</th>        
            </tr>
            <tr>
              <th>First Name</th>
              <th>Height Feet</th>
              <th>Height Inches</th>
              <th>Last name</th>
              <th>Position</th>
              <th>abbreviation</th>
              <th>city</th>
              <th>conference</th>
              <th>division</th>
              <th>full_name</th>
              <th>name</th>
            </tr>  
          </thead>
          <tr>   
            <td><?php echo $vDatos["first_name"]; ?></td>
            <td><?php echo $vDatos["height_feet"]; ?></td>
            <td><?php echo $vDatos["height_inches"]; ?></td>
            <td><?php echo $vDatos["last_name"]; ?></td>
            <td><?php echo $vDatos["position"]; ?></td>            
            <td><?php echo $vDatos["team"]["abbreviation"]; ?></td>
            <td><?php echo $vDatos["team"]["city"]; ?></td>
            <td><?php echo $vDatos["team"]["conference"]; ?></td>
            <td><?php echo $vDatos["team"]["division"]; ?></td>
            <td><?php echo $vDatos["team"]["full_name"]; ?></td>
            <td><?php echo $vDatos["team"]["name"]; ?></td>
          </tr>
        </table>
      </div>
    </div>  
  </body>
</html>


