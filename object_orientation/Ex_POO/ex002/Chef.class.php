<?php
final class Chef extends Pessoa {
    public function __construct(private string $especialidade = "", string $nome = "") {
        parent::__construct($nome);
    }

    public function getEspecialidade(): string {
        return $this->especialidade;
    }
}
?>
