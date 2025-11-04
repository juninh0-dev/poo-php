<?php
require_once 'agenda.class.php';
require_once 'agenda.class.php'; 
require_once 'cliente.class.php';  
require_once 'pessoa.class.php';
require_once 'prestador.class.php';  
require_once 'servico.class.php';
require_once 'item.class.php ';


// Criando cliente
$cliente = new Cliente("123.456.789-00", "Juninho", "14 99999-8888");

// Criando prestadores
$prestador1 = new Prestador("Cabeleireiro", "Lucas", "14 98888-7777");
$prestador2 = new Prestador("Barbeiro", "João", "14 97777-6666");

// Criando serviços
$servico1 = new Servico("Corte de cabelo", 40.00);
$servico2 = new Servico("Barba completa", 30.00);

// Criando itens (agendamentos)
$item1 = new Item("09:00", "Ativo", $servico1, $prestador1);
$item2 = new Item("10:00", "Ativo", $servico2, $prestador2);

// Criando agenda e adicionando itens
$agenda = new Agenda("2025-11-10", $cliente);
$agenda->addItem($item1);
$agenda->addItem($item2);

// Exibindo tudo
$agenda->exibirDados();
?>
