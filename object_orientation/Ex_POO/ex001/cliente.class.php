<?php
    final class Cliente extends Pessoa{
        private ?Pessoa $pessoa = null;
        private ?Festa $festa= null;
        private ?Decoracao $decoracao = null;
        private ?Contratado $contratado = null;
        
        public function __construct(private string $cpf = "") {}

        public function getCpf(){
            return $this->cpf;
        }

        public function setPessoa(Pessoa $pessoa): void {
            $this->pessoa = $pessoa;
        }
        // Festa
        public function setFesta(Festa $festa): void {
            $this->festa = $festa;
        }
        public function getFesta(): ?Festa {
            return $this->festa;
        }

        // Decoração
        public function setDecoracao(Decoracao $decoracao): void {
            $this->decoracao = $decoracao;
        }
        public function getDecoracao(): ?Decoracao {
            return $this->decoracao;
        }

        // Contratado
        public function setContratado(Contratado $contratado): void {
            $this->contratado = $contratado;
        }
        public function getContratado(): ?Contratado {
            return $this->contratado;
        }

        // Exibir dados completos do cliente
        public function exibirDados(): void {
            echo "<h2>Cliente (CPF: {$this->cpf})</h2>";

            if ($this->pessoa) {
                echo "<strong>Nome:</strong> " . $this->pessoa->getNome() . "<br>";
                echo "<strong>Telefones:</strong><br>";
                foreach ($this->pessoa->getTelefones() as $tel) {
                    echo "({$tel->getDdd()}) {$tel->getNumero()}<br>";
                }
            }

            if ($this->festa) {
                echo "<strong>Festa:</strong><br>";
                echo "Data do Contrato: " . $this->festa->getDataContrato() . "<br>";
                echo "Data da Festa: " . $this->festa->getDataFesta() . "<br>";
                echo "Valor: R$ " . number_format($this->festa->getValor(), 2, ',', '.') . "<br>";
            }

            if ($this->decoracao) {
                echo "<strong>Decoração:</strong><br>" . $this->decoracao->getDescritivo() . "<br>";
            }

            if ($this->contratado) {
                echo "<strong>Contratado:</strong><br>CNPJ: " . $this->contratado->getCnpj() . "<hr>";
            }
        }
    }
?>
