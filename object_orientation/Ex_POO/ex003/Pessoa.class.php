<?php
class Pessoa {
    public function __construct(
        private string $nome = "",
        private string $celular = ""
    ) {}

    public function getNome(): string {
        return $this->nome;
    }

    public function getCelular(): string {
        return $this->celular;
    }
}
