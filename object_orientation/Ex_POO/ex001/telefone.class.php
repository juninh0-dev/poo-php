<?php
    class Telefone{
        private ?Pessoa $pessoa = null;

        public function __construct(private int $ddd = 0, private string $numero = ""){}
        
        public function getDdd(){
            return $this->ddd;
        }
        
        public function getNumero(){
            return $this->numero;
        }
        
        public function setPessoa($pessoa){
            $this->pessoa = $pessoa;
        }
        
        public function getPessoa(): ?Pessoa {
            return $this->pessoa;
        }
    }
?>