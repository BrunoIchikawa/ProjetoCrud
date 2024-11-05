<?php 
    $servidor="localhost";
    $usuario="root";
    $senha="12345678";
    $banco="dbteste";
    $cmd=new PDO( "mysql:host=$servidor;dbname=$banco",username: $usuario,password: $senha);
?>