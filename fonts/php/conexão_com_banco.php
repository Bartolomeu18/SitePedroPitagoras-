<?php

$BDname = 'localhost';
$username = 'root';
$password = 'richa';
$BD = 'pedro_pitagoras';

$conectphp = new mysqli($BDname,$username,$password,$BD);
 /*
if($conectphp -> connect_errno){
    echo "erro ao conectar a base de dados ";
 }else{
 
    echo "conectado com sucesso ";
 }*/
?>