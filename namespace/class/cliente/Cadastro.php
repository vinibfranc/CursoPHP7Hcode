<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 17/03/2018
 * Time: 14:13
 */

namespace cliente;
class Cadastro extends \Cadastro
{
    public function registrarVenda(){
        echo "Foi registrada uma venda para o cliente".$this->getNome();
    }
}