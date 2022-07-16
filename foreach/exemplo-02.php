<form>

    <input type="text" name="nome">
    <input type="date" name="nascimento">
    <input type="submit" value="OK">

</form>
<?php
echo $_GET['nome'];

foreach ($_GET as $key => $value) {

    echo "Nome do campo: " .$key;

    echo " Valor do campo: " . $value;

    echo "<hr>";

}



?>


