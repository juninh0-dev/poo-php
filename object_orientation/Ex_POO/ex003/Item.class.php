<?php

class Item {
    public function __construct(
        private string $horario = "",
        private string $status = "Ativo",
        private ?Servico $servico = null,
        private ?Prestador $prestador = null
    ) {}

    public function getHorario(): string {
        return $this->horario;
    }

    public function getStatus(): string {
        return $this->status;
    }

    public function getServico(): ?Servico {
        return $this->servico;
    }

    public function getPrestador(): ?Prestador {
        return $this->prestador;
    }
}