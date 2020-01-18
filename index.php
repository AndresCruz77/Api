<?php
require_once "funciones/utility.php";
require_once "metodos/metodosCrud.php";
if (!file_exists("jugadores.json")) {
  jsonData();
}
?>
<!DOCTYPE html>
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
    <script>
      function f_VerDetalle(id) {
        w = 1210;
        h = 400;
        LeftPosition = (screen.width) ? (screen.width - w) / 2 : 0;
        TopPosition = (screen.height) ? (screen.height - h) / 2 : 0;
        settings = 'height=' + h + ',width=' + w + ',top=' + TopPosition + ',left=' + LeftPosition + ',scrollbars=YES,resizable';
        zWin = window.open("detalle.php?id=" + id, 'DETEST', settings);
        zWin.focus();
      }
    </script>  
    <form action="" method="post">
      <label>Busqueda <b>First Name</b></label>      
             <input id="search-box" type="text" name="search">
      <p></p>      
      <br><br>
      <div class="container">
        <table class="table">
          <thead>
            <tr>
              <th>First Name</th>
              <th>Height Feet</th>
              <th>Height Inches</th>
              <th>Last name</th>
              <th>Position</th>
              <th>Acciones</th>
            </tr>    
          </thead>	
        </table>
          <ul id="players">
          <?php
          $obj    = new metodos();
          $vDatos = $obj->mostrarDatos();
          $vDatos = stdClass_Array($vDatos);
          foreach ($vDatos["data"] as $key => $jugador) {
            
            ?>
<!--            <tr>-->
            
            <li>
              <div>
                <label class="name" style="width: 16%;"><?php echo $jugador['first_name']; ?></label>
                <label style="width: 16%;"><?php echo $jugador['height_feet']; ?></label>
                <label style="width: 16%;"><?php echo $jugador['height_inches']; ?></label>
                <label style="width: 16%;"><?php echo $jugador['last_name']; ?></label>
                <label style="width: 16%;"><?php echo $jugador['position']; ?></label>              
                <label  style="width: 16%; ">
                  <a href="javascript:f_VerDetalle('<?php echo $jugador["id"]; ?>');" class="btn btn btn-outline-info">Ver</a>
                  <a href="editar.php?id=<?php echo $key; ?>" class="btn btn btn-outline-secondary">Actualizar</a>
                </label>              
              </div>
            </li>
          
            
            
<!--          <td class="name"><?php echo $jugador['first_name']; ?></td>    
              <td class="name"><?php echo $jugador['height_feet']; ?></td>
              <td class="name"><?php echo $jugador['height_inches']; ?></td>
              <td class="name"><?php echo $jugador['last_name']; ?></td>
              <td class="name"><?php echo $jugador['position']; ?></td>                                      
              <td>
                <a href="javascript:f_VerDetalle('<?php echo $jugador["id"]; ?>');" class="btn btn btn-outline-info">Ver</a>
                <a href="editar.php?id=<?php echo $key; ?>" class="btn btn btn-outline-secondary">Actualizar</a>
              </td>-->
<!--            </tr>					-->
          <?php  
              
          
              } ?>
          </ul>        
    </form>	
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
  <script src="js/jquery.liveFilter.js" type="text/javascript"></script>
  <script type="text/javascript">
      //$('#directory').liveFilter('#search-box', 'li', { filterChildSelector: '.name'});
      $('#players').liveFilter('#search-box', 'li', { filterChildSelector: '.name'});
  </script>    
</body>
</html>