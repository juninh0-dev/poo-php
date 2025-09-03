<?php 
    class Juridica extends Pessoa{
        private function __construct(private string $cnpj = "", string $nome = "",
        string $celular = "", string $endereco = "")
        {
            parent:: __construct($nome, $celular, $endereco);
        }
        
        
        public function getCnpj(){
            return $this->cnpj;
        }
        public function setCnpj($cnpj){
            return $this->cnpj = $cnpj;
        }

        public function validarCPF($cnpj){
            echo "Validar cnpj";
        }
    }

    
?>