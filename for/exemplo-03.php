<?php

echo "<select>";

for ($i=date("Y"); $i >= date("Y")-100; $i--){

    echo "<option>" . $i . "</option>" . "<br>";


}
echo "</select>";

?>