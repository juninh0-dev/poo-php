<?php
class Pessoa {
    private array $telefones = [];

    public function __construct(private string $nome = "", int $ddd = 0, string $numero = "") {
        if ($ddd && $numero) {
            $this->telefones[] = new Telefone($ddd, $numero);
        }
    }

    public function getNome(): string {
        return $this->nome;
    }

    public function setTelefone(int $ddd, string $numero): void {
        $telefone = new Telefone($ddd, $numero);
        $telefone->setPessoa($this);
        $this->telefones[] = $telefone;
    }

    public function getTelefones(): array {
        return $this->telefones;
    }
}
?>
