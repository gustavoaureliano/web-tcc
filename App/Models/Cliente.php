<?php
    namespace App\Models;
    
    class Cliente {

        private $idCliente = -1;
        private $cpf = "";
        private $nome = "";
        private $sobrenome = "";
        private $dataNascimento = "";
        private $email = "";
        private $senha = "";
        private $foto = null;
        private $acessos = 0;

        public function __construct() {
            //echo $this->nome;
        }

        public function getIdCliente() {
            return $this->idCliente;
        }

        public function setIdCliente($idCliente) {
            $this->idCliente = $idCliente;
        }

        public function getCpf() {
            return $this->cpf;
        }

        public function setCpf($cpf) {
            $this->cpf = $cpf;
        }

        public function getNome() {
            return $this->nome;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }

        public function getSobrenome() {
            return $this->sobrenome;
        }

        public function setSobrenome($sobrenome) {
            $this->sobrenome = $sobrenome;
        }

        public function getDataNascimento() {
            return $this->dataNascimento;
        }

        public function setDataNascimento($dataNascimento) {
            $this->dataNascimento = $dataNascimento;
        }

        public function getEmail() {
            return $this->email;
        }

        public function setEmail($email) {
            $this->email = $email;
        }

        public function getSenha() {
            return $this->senha;
        }

        public function setSenha($senha) {
            $this->senha = $senha;
        }

        public function getFoto() {
            return $this->foto;
        }

        public function setFoto($foto) {
            $this->foto = $foto;
        }

        public function getAcessos() {
            return $this->acessos;
        }

        public function setAcessos($acessos) {
            $this->acessos = $acessos;
        }
        
    }