<?php
require_once 'pessoa.class.php';
require_once 'telefone.class.php';
require_once 'chef.class.php';
require_once 'receita.class.php';
require_once 'avaliador.class.php';
require_once 'avaliacao.class.php';

// Criando o chef
$chef = new Chef("Culinária Italiana", "Carlos Rossi");

// Criando receita
$receita = new Receita("Lasanha de Berinjela", "Berinjela, queijo, molho de tomate, azeite");
$receita->setChef($chef);

// Criando avaliador
$avaliador = new Avaliador("542.234.421-23", "Mariana Lopes");
$avaliador->setTelefone(11, "98333-7724");
$avaliador->setTelefone(11, "42424-2252");

// Criando avaliação
$avaliacao = new Avaliacao(9.5);
$avaliacao->setAvaliador($avaliador);
$avaliacao->setReceita($receita);

// Exibindo os dados
$avaliacao->exibirDados();
?>
