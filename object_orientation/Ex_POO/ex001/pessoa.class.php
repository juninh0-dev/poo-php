<?php
    class Pessoa {
        private array $telefone = array();

        public function __construct (private string $nome = "", int $ddd = 0, string $numero = "") 
        {
            $this->telefone[] = new Telefone($ddd, $numero);
        }

        public function getNome(){
            return $this->nome;
        }

        public function setTelefone(int $ddd, string $numero){
            $telefone = new Telefone($ddd, $numero);
            $telefone->setPessoa($this);
            $this->telefone[] = $telefone;
        }

        // Para pegar todos os telefones de uma pessoa
        public function getTelefones(): array {
        return $this->telefone;
    }
    }

?>