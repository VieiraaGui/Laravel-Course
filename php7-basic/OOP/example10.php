<?php

abstract class Animal {

    public function falar(){

        return "Som";
    }

    public function mover(){

        return "Anda";

    }
}

class Cachorro extends Animal{

    public function falar(){

        return "Late";

    }

}

class Passaro extends Animal{

    public function mover(){
        return "Voa e " . parent::mover();
    }
    public function falar(){
        return "Canta";
    }
}



class Gato extends Animal{

    public function falar(){
        return "Mia";
    }
}

$pluto = new Cachorro();

echo $pluto->falar() ."<br/>";
echo $pluto->mover() . "<br/>";

echo "--------------------------" ."<br/>";

$garfield  = new Gato();

echo $garfield->falar()  . "<br/>";

echo "--------------------------" ."<br/>";


$piu = new Passaro();

echo $piu->mover() . "<br/>";


?>