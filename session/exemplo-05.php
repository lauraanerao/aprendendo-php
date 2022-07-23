<?php
require_once ("config.php");

echo session_save_path(); echo "<br>";

var_dump(session_status());

echo "<br>";

switch(session_status()) {

    case PHP_SESSION_DISABLED:
        echo "a sessão está desabilitada.";
        break;
    case PHP_SESSION_NONE:
        echo "a sessão está habilitada, mas nenhuma existe.";
        break;
    case PHP_SESSION_ACTIVE:
        echo "a sessão está habilitada e uma existe.";
        break;
}

