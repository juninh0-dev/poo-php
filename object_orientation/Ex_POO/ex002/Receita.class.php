<?php
class Receita {
    private ?Chef $chef = null;

    public function __construct(
        private string $nome = "",
        private string $ingredientes = ""
    ) {}

    public function getNome(): string {
        return $this->nome;
    }

    public function getIngredientes(): string {
        return $this->ingredientes;
    }

    public function setChef(Chef $chef): void {
        $this->chef = $chef;
    }

    public function getChef(): ?Chef {
        return $this->chef;
    }
}
?>
