<?php

final class Prestador extends Pessoa {
    public function __construct(
        private string $especialidade = "",
        string $nome = "",
        string $celular = ""
    ) {
        parent::__construct($nome, $celular);
    }

    public function getEspecialidade(): string {
        return $this->especialidade;
    }
}
