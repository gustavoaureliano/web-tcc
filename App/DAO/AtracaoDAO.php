<?php
    namespace App\DAO;

    class AtracaoDAO {

        private $conn;

        public function __construct() {
            $this->conn = Connection::getConn();
        }
        
        public function getAtracao($id) {

            $sql = 'SELECT * FROM tblAtracao where idAtracao = :id';
            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(':id', $id);
            $stmt->execute();

            $success = $stmt->rowCount() > 0;
            
            if ($success) {
                $retorno = $stmt->fetch(\PDO::FETCH_ASSOC);
            } else {
                $retorno = array("idAtracao" => -1);
            }

            return $retorno;
        }

        public function getAllAtracoes() {

            $sql = 'SELECT * FROM tblAtracao';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();

            $success = $stmt->rowCount() > 0;
            
            if ($success) {
                $retorno = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            } else {
                $retorno = array();
            }

            return $retorno;
        }

        public function getFotoAtracao($idAtracao) {
            try {
                $sql = "select foto from tblatracao where idAtracao = :idAtracao";
                $stmt = $this->conn->prepare($sql);
                $stmt->bindParam(":idAtracao", $idAtracao);
                $stmt->execute();
                if ($stmt->rowCount() > 0) {
                    $retorno = $stmt->fetch(\PDO::FETCH_ASSOC);
                } else {
                    $retorno = "";
                }
            } catch(\PDOException $e) {
                //echo "Connection failed: " . $e->getMessage();
            }
            return $retorno['foto'];
        }

    }