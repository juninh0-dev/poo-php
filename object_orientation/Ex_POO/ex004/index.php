<?php
require_once "Pessoa.class.php";
require_once "Proprietario.class.php";
require_once "Shopping.class.php";
require_once "Loja.class.php";
require_once "Condominio.class.php";

$proprietario = new Proprietario("123.456.789-00", "Carlos Silva");
$shopping = new Shopping("12.345.678/0001-99");
$loja = new Loja(5, "L-23");

$condominio = new Condominio("01/11/2025", 2500.75, "10/11/2025");
$condominio->setShopping($shopping);
$condominio->setProprietario($proprietario);
$condominio->setLoja($loja);

echo "<h3>Dados do Condomínio:</h3>";
echo "Data de Geração: " . $condominio->getDataGeracao() . "<br>";
echo "Valor: R$ " . number_format($condominio->getValor(), 2, ',', '.') . "<br>";
echo "Data de Pagamento: " . $condominio->getDataPagamento() . "<br><br>";

echo "<h3>Informações do Shopping:</h3>";
echo "CNPJ: " . $condominio->getShopping()->getCnpj() . "<br><br>";

echo "<h3>Informações do Proprietário:</h3>";
echo "Nome: " . $condominio->getProprietario()->getNome() . "<br>";
echo "CPF: " . $condominio->getProprietario()->getCpf() . "<br><br>";

echo "<h3>Informações da Loja:</h3>";
echo "Número: " . $condominio->getLoja()->getNumero() . "<br>";
echo "Lotes: " . $condominio->getLoja()->getLotes() . "<br>";
?>
