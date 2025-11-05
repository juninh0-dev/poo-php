<?php
final class Avaliador extends Pessoa {
    public function __construct(private string $cpf = "", string $nome = "") {
        parent::__construct($nome);
    }

    public function getCpf(): string {
        return $this->cpf;
    }
}
?>
