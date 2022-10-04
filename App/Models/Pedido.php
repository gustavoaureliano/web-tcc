<?php
    namespace App\Models;

    class Pedido {

        private $idCliente = -1;
        private $idCupom = -1;
        private $ingressos;

        public function getIdCliente() {
            return $this->idCliente;
        }

        public function setIdCliente($idCliente) {
            $this->idCliente = $idCliente;
        }

        public function getIdCupom() {
            return $this->idCliente;
        }

        public function setIdCupom($idCupom) {
            $this->idCupom = $idCupom;
        }

        public function getIngressos() {
            return $this->ingressos;
        }

        public function setIngressos($ingressos) {
            $this->ingressos = $ingressos;
        }

    }