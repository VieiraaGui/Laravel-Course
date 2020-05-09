<?php

    
interface Veiculo{

    public function acelerar($velocidade);
    public function frenar ($velocidade);
    public function trocarMarcha($marcha);


}

abstract class Automovel implements Veiculo  {  
    //To implement that interface to another, just put "," and the name of the interface  

    public function acelerar($velocidade){
        echo "O veiculo acelerou até " . $velocidade . "km/h";

    }

    public function frenar($velocidade)
    {
        echo "O veiculo frenou até" . $velocidade . "km/h";
    }

    public function trocarMarcha ($marcha) {

        echo "O veiculo engatou a marcha" .  $marcha;
    }

}

class DelRey extends Automovel{

    public function empurrar(){


    }

}

$carro = new Automovel();
$carro->acelerar(200);

?>