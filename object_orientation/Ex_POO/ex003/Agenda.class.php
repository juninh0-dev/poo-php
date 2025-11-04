<?php
class Agenda {
    private array $itens = [];

    public function __construct(
        private string $data = "",
        private ?Cliente $cliente = null
    ) {}

    public function addItem(Item $item): void {
        $this->itens[] = $item;
    }

    public function getItens(): array {
        return $this->itens;
    }

    public function getData(): string {
        return $this->data;
    }

    public function getCliente(): ?Cliente {
        return $this->cliente;
    }

    public function exibirDados(): void {
        echo "<h2>Agenda do dia: {$this->data}</h2>";

        if ($this->cliente) {
            echo "<strong>Cliente:</strong> {$this->cliente->getNome()}<br>";
            echo "<strong>CPF:</strong> {$this->cliente->getCpf()}<br>";
            echo "<strong>Celular:</strong> {$this->cliente->getCelular()}<br><br>";
        }

        echo "<h3>Itens da Agenda:</h3>";
        foreach ($this->itens as $item) {
            $servico = $item->getServico();
            $prestador = $item->getPrestador();
            echo "<strong>Horário:</strong> {$item->getHorario()}<br>";
            echo "<strong>Status:</strong> {$item->getStatus()}<br>";

            if ($servico) {
                echo "<strong>Serviço:</strong> {$servico->getDescritivo()}<br>";
                echo "<strong>Preço:</strong> R$ " . number_format($servico->getPreco(), 2, ',', '.') . "<br>";
            }

            if ($prestador) {
                echo "<strong>Prestador:</strong> {$prestador->getNome()} ({$prestador->getEspecialidade()})<br>";
                echo "<strong>Contato:</strong> {$prestador->getCelular()}<br>";
            }

            echo "<hr>";
        }
    }
}
?>
