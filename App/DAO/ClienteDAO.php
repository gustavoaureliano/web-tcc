<?php
    namespace App\DAO;

    class ClienteDAO {

        private $conn;

        public function __construct() {
            $this->conn = Connection::getConn();
        }
        
        public function getCliente($id) {

            $sql = 'SELECT * FROM tblcliente where idCliente = :id';
            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(':id', $id);
            $stmt->execute();

            $success = $stmt->rowCount() > 0;
            
            if ($success) {
                $cliente = $stmt->fetch(\PDO::FETCH_ASSOC);
                $retorno = Array(
                    "success" => $success,
                    "cliente" => $cliente
                );
            } else {
                $retorno = Array(
                    "success" => $success,
                    "cliente" => null
                );
            }

            return $retorno;
        }

        public function getAllClientes() {

            $sql = 'SELECT * FROM tblcliente';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute();

            $success = $stmt->rowCount() > 0;
            
            if ($success) {
                $clientes = $stmt->fetchAll(\PDO::FETCH_ASSOC);
                $retorno = Array(
                    "success" => $success,
                    "cliente" => $clientes
                );
            } else {
                $retorno = Array(
                    "success" => $success,
                    "cliente" => array()
                );
            }

            return $retorno;
        }

        public function checkLogin($cliente) {

            $sql = "call usp_login(:email, :senha)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(':email', $cliente->getEmail());
            $stmt->bindValue(':senha', $cliente->getSenha());
            $stmt->execute();

            //if ($stmt->rowCount() > 0) {
                $retorno = $stmt->fetch(\PDO::FETCH_ASSOC);
            //}
            //echo "<pre>";
            //echo "SQL: ".$sql;
            //echo "ID: ".$retorno["id"];
            return $retorno;
            

        }

        public function cadastrarCliente($cliente) {

            $sql = "call usp_cadastrarCLiente(:nome, :sobrenome, :cpf, :dataNascimento, :email, :senha)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(':nome', $cliente->getNome());
            $stmt->bindValue(':sobrenome', $cliente->getSobrenome());
            $stmt->bindValue(':cpf', $cliente->getCpf());
            $stmt->bindValue(':dataNascimento', $cliente->getDataNascimento());
            $stmt->bindValue(':email', $cliente->getEmail());
            $stmt->bindValue(':senha', $cliente->getSenha());
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                $retorno = $stmt->fetch(\PDO::FETCH_ASSOC);
            }

            return (int) $retorno['id'];

        }

        public function atualizarCliente($cliente) {

            $sql = "call usp_atualizarCliente(:idCliente, :nome, :sobrenome, :cpf, :dataNascimento, :email, :senha)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(':idCliente', $cliente->getIdCliente());
            $stmt->bindValue(':nome', $cliente->getNome());
            $stmt->bindValue(':sobrenome', $cliente->getSobrenome());
            $stmt->bindValue(':cpf', $cliente->getCpf());
            $stmt->bindValue(':dataNascimento', $cliente->getDataNascimento());
            $stmt->bindValue(':email', $cliente->getEmail());
            $stmt->bindValue(':senha', $cliente->getSenha());
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                $retorno = $stmt->fetch(\PDO::FETCH_ASSOC);
            } else {
                $retorno = 0;
            }

            return (int) $retorno['sucesso'];

        }

        public function setFotoCliente($foto, $idCliente) {
            try {
                $sql = "update tblcliente set Foto = :foto where idCliente = :idCliente";
                $stmt = $this->conn->prepare($sql);
                $stmt->bindParam(":foto", $foto, \PDO::PARAM_LOB);
                $stmt->bindParam(":idCliente", $idCliente, \PDO::PARAM_INT);
                $this->conn->errorInfo();
                $stmt->execute();
                if ($stmt->rowCount() > 0) {
                    //echo "row count";
                } else {
                    //echo "no row count";
                }
            } catch(\PDOException $e) {
                //echo "Connection failed: " . $e->getMessage();
            }
            //var_dump($foto);
            //var_dump(implode(' ', $foto));
            //$blob = fopen($foto, 'rb');
            //var_dump($blob);
            return 1;
        }

        public function getFotoCliente($idCliente) {
            try {
                $sql = "select foto from tblcliente where idCliente = :idCliente";
                $stmt = $this->conn->prepare($sql);
                $stmt->bindParam(":idCliente", $idCliente);
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