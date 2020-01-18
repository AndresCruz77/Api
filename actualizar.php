<?php
require_once "funciones/utility.php";
require_once "metodos/metodosCrud.php";
$id                      = $_POST['id_arr'];
$input                   = array(
    'id' => $_POST['id_jugador'],
    'first_name' => $_POST['first_name'],
    'height_feet' => $_POST['height_feet'],
    'height_inches' => $_POST['height_inches'],
    'last_name' => $_POST['last_name'],
    'position' => $_POST['position'],
    'team' => array(
        'id' => $_POST['id_team'],
        'abbreviation' => $_POST['abbreviation'],
        'city' => $_POST['city'],
        'conference' => $_POST['conference'],
        'division' => $_POST['division'],
        'full_name' => $_POST['full_name'],
        'name' => $_POST['name']
    )
);
$vDatos                  = "";
$obj                     = new metodos();
$data_array              = $obj->mostrarDatos();
$data_array              = stdClass_Array($data_array);
$data_array["data"][$id] = $input;
$data                    = json_encode($data_array, JSON_PRETTY_PRINT);
file_put_contents('jugadores.json', $data);
header('location: index.php');
?>