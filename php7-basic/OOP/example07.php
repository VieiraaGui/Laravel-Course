<?php

    class Documento{

        private $numero;

        public function getNumero(){

            return $this->numero;
        }

        public function setNumero ($n){

            $this->numero = $n;

        }
    
    
    }


    class Cpf extends Documento {
        
        public function validar():bool

        {
            return true;
        }


    }

    $doc = new CPF();

    $doc->setNumero("251515150");
    var_dump($doc->validar());

    echo "<br/>";

    echo $doc->getNumero();

    

?>