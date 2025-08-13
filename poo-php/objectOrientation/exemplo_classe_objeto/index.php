<?php
//require "usuario.php";
require_once "usuario.php";
//include "usuario.php";
//include_once "usuario.php";

//criando um objeto
$usuario1 = new Usuario("Altair", "doieoihe@gmail.com", "Senha123");
$usuario2 = new Usuario("Nome de Gente Legal ", "doieoiheA@gmail.com", "ASDFGHJKLC~~]");
$usuario3 = new Usuario(email:"sdasdasdsadsadsa@gmail.com", senha:"BomDeTerraria123", nome:"RogerinDoGrau");

echo "Nome: {$usuario1->nome}<br>";
echo "Email: {$usuario1->email}<br>";
echo "Senha: {$usuario1->senha}<br>";

$usuario1->nome = "Altair Preto";
echo "Nome: {$usuario1->nome}<br>";

//echo "<pre>";
//var_dump($usuario1);
//echo "</pre>";

//echo "<pre>";
//var_dump($usuario2);
//echo "</pre>";

//echo "<pre>";
//var_dump($usuario3);
//echo "</pre>";

?>