<?php
//Llamada al modelo
require_once("models/equipos_model.php");
$equipo=new equipos_model();
$equipos=$equipo->get_equipos();
$comentarios=$equipo->get_comentarios();
 
//Llamada a la vista
require_once("./views/index.php");
?>
