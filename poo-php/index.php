<?php
    $nome = $_GET["nome"];
    $altura = $_GET["altura"];

    print "Seja bem-vindo $nome!<br> 
    Sua idade é {$_GET['idade']}<br>";

    is_double($altura);
    echo "E sua altura é: $altura";

?>