<?php

class ClienteController{
    private $cliente;
    private $cliente_dao;

    public function __construct(){
     //$this->cliente = new Cliente();
     //$this->clientedao = new ClienteDAO();
}
public function index(){
    header('Location:view/cliente/mostrar_tudo.php');        
}
public function create(){
    header('Location:view/cliente/inserir.php');    
}
public function store(){    
}
public function edit($id){
    header('Location:view/cliente/atualizar.php');
}
public function show($id){
}
public function uptade($id){
}
public function delete($id){
}
}