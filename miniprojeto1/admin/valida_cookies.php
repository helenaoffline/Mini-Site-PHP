
<?php
if(isset($_COOKIE['login'])){
    $login = $_COOKIE['login'];
}
if(isset($_COOKIE['senha'])){
    $senha = $_COOKIE['senha'];
}
if(empty($login) OR empty($senha)){
        setcookie("login");
        setcookie("senha");
        echo "<center>Faça o Login para acessar o painel Admin.";
        echo "<a href=login.php> Login.</a></center>";
        exit();
 }

 ?>
