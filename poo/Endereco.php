<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 13/03/2018
 * Time: 09:47
 */

class Endereco
{
    private $logradouro;
    private $numero;
    private $cidade;

    public function __construct($log, $num, $cid)
    {
        $this->logradouro = $log;
        $this->numero = $num;
        $this->cidade = $cid;
    }

    public function __destruct()
    {
        var_dump("DESTRUIR");
    }

    public function __toString()
    {
        return $this->logradouro.", ".$this->numero.", ".$this->cidade;
    }
}

$meuEndereco = new Endereco("Rua Ademar Saraiva Leão","123","Santos");
echo $meuEndereco;
//var_dump($meuEndereco);

//unset($meuEndereco);