<?php

include './controller/ClienteController.php';

$classe = $_GET['classe'] . 'Controller';
$metodo = $_GET['acao'];
$id = $_GET['id'];

$controller = new $classe();
  if(isset($_GET['id'])){
  $controller -> $metodo($id);
  }
  else{
    $controller->$metodo();
  }