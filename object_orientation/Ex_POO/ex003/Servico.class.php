<?php
class Servico {
    public function __construct(
        private string $descritivo = "",
        private float $preco = 0
    ) {}

    public function getDescritivo(): string {
        return $this->descritivo;
    }

    public function getPreco(): float {
        return $this->preco;
    }
}
