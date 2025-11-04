<?php 
    final class Contratado extends Pessoa{
        public function __construct(
            private string $cnpj = "",
            string $nome = ""    
        )
        {
            parent:: __construct($nome);
        }

        public function getCnpj(){
            return $this->cnpj;
        }
    }

?>