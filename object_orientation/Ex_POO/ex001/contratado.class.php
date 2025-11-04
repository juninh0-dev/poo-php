<?php 
    final class Contratado extends Pessoa{
        public function __construct(private string $cnpj = ""){}

        public function getCnpj(){
            return $this->cnpj;
        }
    }

?>