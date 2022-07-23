<?php

session_id('h4b331iplr97nlaer398vb725u');

require_once ("config.php");

session_regenerate_id();

echo session_id(); echo "<br>";

var_dump($_SESSION);
