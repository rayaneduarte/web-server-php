<?php

  class Cliente{
    private $id;
    private $nome;
    private $dt_nasc;

    public function setId ($id){
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }
    public function setNome($nome){
        $this->nome= $nome;
    }
    public function getNome(){
        return $this->nome;
    }
    public function setDt_nasc($dt_nasc){
        $this->dt_nasc = $dt_nasc;
    }
    public function getDt_nasc(){
        return $this->dt_nasc;
    }

    public function __construct(){
    }
  }