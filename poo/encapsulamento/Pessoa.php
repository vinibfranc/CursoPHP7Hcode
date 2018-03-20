<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 16/03/2018
 * Time: 10:44
 */

class Pessoa
{
    public $nome = "Rasmus Lerdorf";//todo mundo vê
    protected $idade = 48; //quem está dentro da própria classe ou quem herda dela
    private $senha = "123456"; //só quem está dentro da classe pode acessar

    public function verDados() {
        echo $this->nome . "<br>";
        echo $this->idade . "<br>";
        echo $this->senha . "<br>";
    }
}

$objeto = new Pessoa();
//echo $objeto->nome . "<br>";
$objeto->verDados();