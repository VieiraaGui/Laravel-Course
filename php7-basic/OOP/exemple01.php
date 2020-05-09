<?php

class Pessoa{

public $nome; //Atributes

public function falar(){

    return "O meu nome é ".$this->nome;
}

}

$gui = new Pessoa();
$gui->nome = "Gui Vieira";

echo $gui->falar();

?>