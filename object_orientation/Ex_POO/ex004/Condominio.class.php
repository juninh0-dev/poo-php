<?php
class Condominio {
    private ?Shopping $shopping = null;
    private ?Proprietario $proprietario = null;
    private ?Loja $loja = null;

    public function __construct(
        private string $data_geracao = "",
        private float $valor = 0.0,
        private string $data_pagamento = ""
    ) {}

    public function setShopping(Shopping $shopping): void {
        $this->shopping = $shopping;
    }

    public function getShopping(): ?Shopping {
        return $this->shopping;
    }

    public function setProprietario(Proprietario $proprietario): void {
        $this->proprietario = $proprietario;
    }

    public function getProprietario(): ?Proprietario {
        return $this->proprietario;
    }

    public function setLoja(Loja $loja): void {
        $this->loja = $loja;
    }

    public function getLoja(): ?Loja {
        return $this->loja;
    }

    public function getDataGeracao(): string {
        return $this->data_geracao;
    }

    public function getValor(): float {
        return $this->valor;
    }

    public function getDataPagamento(): string {
        return $this->data_pagamento;
    }
}
?>
