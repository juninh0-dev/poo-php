<?php
class Shopping {
    public function __construct(
        private string $cnpj = ""
    ) {}

    public function getCnpj(): string {
        return $this->cnpj;
    }
}
?>
