<?php
    namespace App\Models;

    class Ingresso {

        private $idIngresso = -1;
        private $idCliente = -1;
        private $idStatusIngresso = -1;
        private $idTipoIngresso = -1;
        private $dataEmissao = "";
        private $meia = false;
        private $dataInicio = "";
        private $dataValidade = "";

        public function getIdIngresso() {
            return $this->idIngresso;
        }

        public function setIdIngresso($idIngresso) {
            $this->idIngresso = $idIngresso;
        }

        public function getIdCliente() {
            return $this->idCliente;
        }

        public function setIdCliente($idCliente) {
            $this->idCliente = $idCliente;
        }

        public function getIdStatusIngresso() {
            return $this->idStatusIngresso;
        }

        public function setIdStatusIngresso($idStatusIngresso) {
            $this->idStatusIngresso = $idStatusIngresso;
        }

        public function getIdTipoIngresso() {
            return $this->idTipoIngresso;
        }

        public function setIdTipoIngresso($idTipoIngresso) {
            $this->idTipoIngresso = $idTipoIngresso;
        }

        public function getDataEmissao() {
            return $this->dataEmissao;
        }

        public function setDataEmissao($dataEmissao) {
            $this->dataEmissao = $dataEmissao;
        }

        public function isMeia() {
            return $this->meia;
        }

        public function setMeia($meia) {
            $this->meia = $meia;
        }

        public function getDataInicio() {
            return $this->dataInicio;
        }

        public function setDataInicio($dataInicio) {
            $this->dataInicio = $dataInicio;
        }

        public function getDataValidade() {
            return $this->dataValidade;
        }

        public function setDataValidade($dataValidade) {
            $this->dataValidade = $dataValidade;
        }

    }