<?php
require_once 'pessoa.class.php';
require_once 'telefone.class.php';
require_once 'festa.class.php';
require_once 'decoracao.class.php';
require_once 'contratado.class.php';
require_once 'cliente.class.php';

// Criando pessoas
$pessoa1 = new Pessoa("Juninho", 14, "99999-8888");
$pessoa1->setTelefone(14, "98888-7777");

$pessoa2 = new Pessoa("Maria");
$pessoa2->setTelefone(11, "97777-6666");
$pessoa2->setTelefone(11, "96666-5555");

// Criando festas
$festa1 = new Festa("2025-11-01", "2025-11-15", 1500.00);
$festa2 = new Festa("2025-11-05", "2025-11-20", 2500.00);

// Criando decorações
$decor1 = new Decoracao("Balões coloridos, mesa de doces temática");
$decor2 = new Decoracao("Tema festa à fantasia, iluminação especial");

// Criando contratados
$contratado1 = new Contratado("12.345.678/0001-99");
$contratado2 = new Contratado("98.765.432/0001-11");

// Criando clientes e associando tudo
$cliente1 = new Cliente("123.456.789-00");
$cliente1->setPessoa($pessoa1);
$cliente1->setFesta($festa1);
$cliente1->setDecoracao($decor1);
$cliente1->setContratado($contratado1);

$cliente2 = new Cliente("987.654.321-00");
$cliente2->setPessoa($pessoa2);
$cliente2->setFesta($festa2);
$cliente2->setDecoracao($decor2);
$cliente2->setContratado($contratado2);

// Exibindo clientes
$cliente1->exibirDados();
$cliente2->exibirDados();
?>
