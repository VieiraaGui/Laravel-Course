<?php
//Encapsulamento

class Pessoa {
     public $nome = "GUII";
     protected $idade = 48;
     private $senha = "11582";

     public function verDados(){

        echo $this->nome . "<br/>";
        echo $this->idade . "<br/>";
        echo $this->senha . "<br/>";
     }


}

$objeto = new Pessoa();

//echo $objeto->senha . "<br/>";

$objeto->verDados();


?>