<?php

final class Cliente extends Pessoa {
    public function __construct(
        private string $cpf = "",
        string $nome = "",
        string $celular = ""
    ) {
        parent::__construct($nome, $celular);
    }

    public function getCpf(): string {
        return $this->cpf;
    }
}