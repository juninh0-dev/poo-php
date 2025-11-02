<?php
    class Festa{
        public function __construct(private string $data_contrato = "", private string $data_festa = "", private float $valor = 0){}
            public function getDataContrato(){
                return $this->data_contrato;
            }
            public function getDataFesta(){
                return $this->data_festa;
            }
            public function getValor(){
                return $this->valor;
            }
    }

?>