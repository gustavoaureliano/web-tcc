<?php
    namespace App\DAO;

    class IngressoDAO {

        private $conn;

        public function __construct() {
            $this->conn = Connection::getConn();
        }
        
        public function getIngresso($id) {

            $sql = 'SELECT * FROM tblIngresso where idIngresso = :id';
            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(':id', $id);
            $stmt->execute();

            $success = $stmt->rowCount() > 0;
            
            if ($success) {
                $retorno = $stmt->fetch(\PDO::FETCH_ASSOC);
            } else {
                $retorno = array("idIngresso" => -1);
            }

            return $retorno;
        }

        public function checkIngresso($id) {

            $sql = "CALL usp_checkIngresso(:id);";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(':id', $id);
            $stmt->execute();

            $success = $stmt->rowCount() > 0;
            
            if ($success) {
                $retorno = $stmt->fetch(\PDO::FETCH_ASSOC);
            } else {
                $retorno = array("id" => -1);
            }

            return (int) $retorno["id"];
        }

        public function getIngressoCliente($id) {

            $sql = 'select * from tblingresso as i join tbltipoingresso as t where t.idTipoIngresso = i.idTipoIngresso and idCliente = :id';
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

        public function getAllIngressos() {

            $sql = 'select * from tblingresso as i join tbltipoingresso as t where t.idTipoIngresso = i.idTipoIngresso';
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

        public function getAllTiposIngresso() {
            $sql = 'select * from tbltipoingresso';
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

        public function getTipoIngresso($id) {
            $sql = 'select * from tbltipoingresso where idTipoIngresso = :id';
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

        public function comprarIngresso($pedido) {

            $idCliente = $pedido->getIdCliente();
            $idCupom = $pedido->getIdCupom();
            $ingressos = $pedido->getIngressos();
            if  ($idCliente && $ingressos) {
                $queryPedido = "insert into tblpedido (idCliente, idCupom, idStatusPedido, DataPedido, DataValidacao) values (:idCliente, :idCupom, 1, CURDATE(), CURDATE())";
                $stmt = $this->conn->prepare($queryPedido);
                $stmt->bindValue(':idCliente', $idCliente);
                if ($idCupom > 0) {
                    $stmt->bindValue(':idCupom', $idCupom);
                } else {
                    $stmt->bindValue(':idCupom', null);
                }
                $stmt->execute();
                $idPedido = $this->conn->lastInsertId(); //pegar o ultimo idinserido a partir dessa conexao
                //echo $idPedido;
                if ($idPedido > 0) {
                    $ingressosSent = 0;
                    for ($i = 0; $i < count($ingressos); $i++) {
                        $queryIngresso = "insert into tblingresso (idCliente, idStatusIngresso, idPedido, idTipoIngresso, DataEmissao, meia, DataInicio, DataValidade) values (:idCliente, 1, :idPedido, :ingresso, CURDATE(), :meia, :dataInicio, :dataValidade)";
                        $stmt2 = $this->conn->prepare($queryIngresso);
                        $stmt2->bindValue(':idCliente', $idCliente);
                        $stmt2->bindValue(':idPedido', $idPedido);
                        $stmt2->bindValue(':ingresso', $ingressos[$i]->getIdTipoIngresso());
                        if($ingressos[$i]->isMeia()) {
                            $stmt2->bindValue(':meia', 1);
                        } else {
                            $stmt2->bindValue(':meia', 0);
                        }
                        $stmt2->bindValue(':dataInicio', $ingressos[$i]->getDataInicio());
                        $stmt2->bindValue(':dataValidade', $ingressos[$i]->getDataValidade());
                        $stmt2->execute();
                        if ($stmt2->rowCount() > 0) {
                            $ingressosSent++;
                        }
                    }
                    //$retorno = $stmt->fetchAll(\PDO::FETCH_ASSOC);
                    //$retorno2 = $stmt2->fetchAll(\PDO::FETCH_ASSOC);

                    //echo "<br>";
                    //echo $retorno;
                    //echo "<br>";
                    //echo $retorno2;
                    //echo "<br>";
                    
                    //echo "pedido: ".$idPedido;
                    //echo "<br>stmt1: ".$stmt->rowCount();
                    //echo "<br>ingressos: count(".count($ingressos).") => ".$ingressosSent."<br>";
                    
                    if ($stmt->rowCount() > 0  && $ingressosSent >= count($ingressos)) {
                        return (int) $idPedido;
                    } else {
                        return -1;
                    }
                }
                
            } else {
                return -1;
            }
        }

    }