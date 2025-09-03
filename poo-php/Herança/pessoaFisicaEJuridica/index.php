<?php
    require_once "Pessoa.class.php";
    require_once "Fisica.class.php";
    require_once "Juridica.class.php";

    $pessoaFisica = new Fisica("123.123.345-34", "João da Silva", "(14)988332166",
    "Rua VX de Novembro 123");

    echo "<pre>";
    var_dump($pessoaFisica);
    echo "</pre>";

    echo $pessoaFisica->Inserir($pessoaFisica);
    echo $pessoaFisica->Alterar($pessoaFisica);
?>