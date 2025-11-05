<?php
class Telefone {
    private ?Pessoa $pessoa = null;

    public function __construct(private int $ddd = 0, private string $numero = "") {}

    public function getDdd(): int {
        return $this->ddd;
    }

    public function getNumero(): string {
        return $this->numero;
    }

    public function setPessoa(Pessoa $pessoa): void {
        $this->pessoa = $pessoa;
    }

    public function getPessoa(): ?Pessoa {
        return $this->pessoa;
    }
}
?>
