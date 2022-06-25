<?php

$anoNascimento = 1982;

//$nomeCompleto = "Laura";
// comentário exemplo

$nome1 = "Antonio";

$sobrenome = "Anerão";

$nomeCompleto = $nome1 . ' ' . $sobrenome;

echo $nomeCompleto;

exit;

echo $nome1;

echo "<br/>";

unset($nome1);

echo $nome1;

if (isset($nome1)) {

	echo $nome1;


}
