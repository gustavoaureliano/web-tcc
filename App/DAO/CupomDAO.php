<?php
    namespace App\DAO;

    class CupomDAO {

        private $conn;

        public function __construct() {
            $this->conn = Connection::getConn();
        }
        
        public function getCupom($id) {

            $sql = 'SELECT * FROM tblcupom where idCupom = :id';
            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(':id', $id);
            $stmt->execute();

            $success = $stmt->rowCount() > 0;
            
            if ($success) {
                $retorno = $stmt->fetch(\PDO::FETCH_ASSOC);
            } else {
                $retorno = array("idCupom" => -1);
            }

            return $retorno;
        }

        public function getCuponsCliente($id) {

            $sql = 'select * from tblcupom as c join tblcliente_has_cupom as cc where c.idCupom = cc.idCupom and cc.idCliente = :id;';
            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(':id', $id);
            $stmt->execute();

            $success = $stmt->rowCount() > 0;
            
            if ($success) {
                $retorno = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            } else {
                $retorno = array();
            }

            return $retorno;
        }

        public function getAllCupons() {

            $sql = 'SELECT * FROM tblcupom';
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
        
        public function getFotoCupom($idCupom) {
            try {
                $sql = "select foto from tblCupom where idCupom = :idCupom";
                $stmt = $this->conn->prepare($sql);
                $stmt->bindParam(":idCupom", $idCupom);
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