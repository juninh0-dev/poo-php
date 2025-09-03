<?php
    require_once "Conta.class.php";
    require_once "Poupanca.class.php";
    require_once "Corrente.class.php";

    $corrente = new Corrente(1000, "123-4", "245-5", 5000);
    
    
    echo $corrente->getSaldo() . "<br>";
    $corrente->Retirar(500);
    
    echo $corrente->getSaldo() . "<br>";
    
    $poupanca = new Poupanca(4, "123-4", "245-5", 5000);
    echo $poupanca->getSaldo() . "<br>";
    $poupanca->Retirar(4000);
    
    echo $poupanca->getSaldo() . "<br>";


?>