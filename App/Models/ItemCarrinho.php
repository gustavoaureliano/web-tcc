<?php
    namespace App\Models;

    use App\Models\Ingresso;

    class ItemCarrinho extends Ingresso {  
        private $quantidade = 0;
        private $preco = 0;
        private $prodNome = 0;

        public function getQuantidade() {
            return $this->quantidade;
        }

        public function setQuantidade($quantidade) {
            $this->quantidade = $quantidade;
        }

        public function getPreco() {
            return $this->preco;
        }

        public function setPreco($preco) {
            $this->preco = $preco;
        }

        public function getProdNome() {
            return $this->ProdNome;
        }

        public function setProdNome($ProdNome) {
            $this->ProdNome = $ProdNome;
        }
    }
?>