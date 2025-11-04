<?php
class Loja {
    public function __construct(
        private int $lotes = 0,
        private string $numero = ""
    ) {}

    public function getLotes(): int {
        return $this->lotes;
    }

    public function getNumero(): string {
        return $this->numero;
    }
}
?>
