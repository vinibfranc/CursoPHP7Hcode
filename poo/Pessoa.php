<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 13/03/2018
 * Time: 09:04
 */

class Pessoa {
    public $nome;//atributo

    public function falar(){//método
        return "O meu nome é ".$this->nome; //não usa $ no nome
    }
}

$p1 = new Pessoa();
$p1->nome = "Vini Franceschi";
echo $p1->falar();