<?php
require_once('../conexion/config.php');
$id    		= $_REQUEST['id']; 

$sqlDeleteEvento = ("DELETE FROM eventoscalendar WHERE  id='" .$id. "'");
$resultProd = mysqli_query($con, $sqlDeleteEvento);
header("Location: tareas.php");
?>
  