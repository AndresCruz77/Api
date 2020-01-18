<?php
require_once "funciones/utility.php";
require_once "metodos/metodosCrud.php";
$id     = $_GET['id'];
$obj    = new metodos();
$vDatos = $obj->mostrarDatos();
$vDatos = stdClass_Array($vDatos);
$row    = $vDatos["data"][$id];
?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
      <div class="card">
        <div class="card-header">
          <h3>                
            Actualizar Jugador <b><?php echo $row['first_name'] . "  " . $row['last_name'] ?></b>                
          </h3>
        </div>
        <div class="card-body">
          <form method="POST" action="actualizar.php"> <!--procesos/actualizar.php-->
            <input  type="hidden" name="id_jugador" value="<?php echo $row['id']; ?>">    
            <input  type="hidden" name="id_team" value="<?php echo $row["team"]['id']; ?>">    
            <input  type="hidden" name="id_arr" value="<?php echo $id; ?>">                
            <div class="form-group">
              <label>first_name</label>
              <input class="form-control" name="first_name" value="<?php echo $row['first_name'] ?>">                                        
            </div>
            <div class="form-group">
              <label>height_feet</label>
              <input class="form-control" name="height_feet" value="<?php echo $row['height_feet'] ?>">                    
            </div>
            <div class="form-group">
              <label>height_inches</label>
              <input class="form-control" name="height_inches" value="<?php echo $row['height_inches'] ?>">
            </div>
            <div class="form-group">
              <label>last_name</label>
              <input class="form-control" name="last_name" value="<?php echo $row['last_name'] ?>">                           
            </div>
            <div class="form-group">
              <label>position</label>
              <input class="form-control" name="position" value="<?php echo $row['position'] ?>">                       
            </div>                                
            <div class="form-group">
              <label>abbreviation</label>
              <input class="form-control" name="abbreviation" value="<?php echo $row["team"]['abbreviation'] ?>">                       
            </div>                                
            <div class="form-group">
              <label>city</label>
              <input class="form-control" name="city" value="<?php echo $row["team"]['city'] ?>">                       
            </div>                                
            <div class="form-group">
              <label>conference</label>
              <input class="form-control" name="conference" value="<?php echo $row["team"]['conference'] ?>">                       
            </div>                                
            <div class="form-group">
              <label>division</label>
              <input class="form-control" name="division" value="<?php echo $row["team"]['division'] ?>">                       
            </div>                                
            <div class="form-group">
              <label>full_name</label>
              <input class="form-control" name="full_name" value="<?php echo $row["team"]['full_name'] ?>">                       
            </div>                                
            <div class="form-group">
              <label>name</label>
              <input class="form-control" name="name" value="<?php echo $row["team"]['name'] ?>">                       
            </div>                                

            <input class="btn btn-success"  type="submit" name="Guardar" value="Guardar">            
            <a href="index.php" class="btn btn-info">Inicio</a>
          </form>
        </div>
      </div>
    </div>
    <?php
    ?>
  </body>
</html>