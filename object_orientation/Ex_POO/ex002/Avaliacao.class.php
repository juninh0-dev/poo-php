<?php
class Avaliacao {
    private ?Avaliador $avaliador = null;
    private ?Receita $receita = null;

    public function __construct(private float $nota = 0.0) {}

    public function getNota(): float {
        return $this->nota;
    }

    public function setAvaliador(Avaliador $avaliador): void {
        $this->avaliador = $avaliador;
    }

    public function getAvaliador(): ?Avaliador {
        return $this->avaliador;
    }

    public function setReceita(Receita $receita): void {
        $this->receita = $receita;
    }

    public function getReceita(): ?Receita {
        return $this->receita;
    }

    public function exibirDados(): void {
        echo "<h2>Avaliação</h2>";

        if ($this->avaliador) {
            echo "<strong>Avaliador:</strong> {$this->avaliador->getNome()} (CPF: {$this->avaliador->getCpf()})<br>";
            echo "<strong>Telefones:</strong><br>";
            foreach ($this->avaliador->getTelefones() as $tel) {
                echo "({$tel->getDdd()}) {$tel->getNumero()}<br>";
            }
        }

        if ($this->receita) {
            echo "<strong>Receita:</strong> {$this->receita->getNome()}<br>";
            echo "<strong>Ingredientes:</strong> {$this->receita->getIngredientes()}<br>";

            if ($this->receita->getChef()) {
                $chef = $this->receita->getChef();
                echo "<strong>Chef:</strong> {$chef->getNome()} ({$chef->getEspecialidade()})<br>";
            }
        }

        echo "<strong>Nota:</strong> {$this->nota}<hr>";
    }
}
?>
