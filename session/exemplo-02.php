 <?php
session_start();

session_unset($_SESSION['nome']);
echo $_SESSION['nome'];
