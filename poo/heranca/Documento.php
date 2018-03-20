<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 16/03/2018
 * Time: 11:08
 */

class Documento
{
    private $numero;

    public function getNumero(){
        return $this->numero;
    }

    public function setNumero($n){
        $this->numero = $n;
    }
}

class Cpf extends Documento {

    public function validar():bool {
        $numeroCpf = $this->getNumero();
        //validação do CPF
        return true;
    }
}

$doc = new Cpf();
$doc->setNumero("01629988057");
var_dump($doc->validar());
echo "<br>";
echo $doc->getNumero();
