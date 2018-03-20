<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 17/03/2018
 * Time: 13:11
 */

abstract class Animal{
    public function falar(){
        return "Som";
    }
    public function mover(){
        return "Anda";
    }
}

class Cachorro extends Animal {
    public function falar(){
        return "Late";
    }
}

class Gato extends Animal {
    public function falar()
    {
         return "Mia";
    }
}

class Passaro extends Animal {
    public function falar()
    {
        return "Canta";
    }
    public function mover(){
        return "Voa <br>". parent::mover();
    }
}

$pluto = new Gato();
echo $pluto->falar() . "<br>";
echo $pluto->mover() . "<br>";

echo "-------------------------<br>";

$garfield = new Cachorro();
echo $garfield->falar() . "<br>";
echo $garfield->mover() . "<br>";

echo "-------------------------<br>";

$ave = new Passaro();
echo $ave->falar() . "<br>";
echo $ave->mover() . "<br>";
