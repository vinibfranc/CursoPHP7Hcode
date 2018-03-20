<?php
/**
 * Created by PhpStorm.
 * User: Vinícius
 * Date: 08/03/2018
 * Time: 10:38
 */

echo "<select>";

for($i=date("Y"); $i > date("Y")-100; $i--){
    echo '<option value="'.$i.'">'.$i.'</option>';
}

echo "</select>";