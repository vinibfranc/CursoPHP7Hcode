
<form method="post">
    <input type="text" name="busca">
    <button type="submit">Enviar</button>
</form>

<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 22/03/2018
 * Time: 09:56
 */
//Cross-site Scripting (XSS)

if(isset($_POST["busca"])){
    echo strip_tags($_POST["busca"]);
    //echo htmlentities($_POST["busca"]);
}
?>