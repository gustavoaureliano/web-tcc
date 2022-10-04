<?php
    namespace App\Controllers\Api;

    use App\Controllers\Controller;
    use App\DAO\ClienteDAO;
    use App\Models\Cliente;

    class CadastroController extends Controller {

        public function __construct() {
            parent::__construct();
        }

        public function executar() {

            $request = $this->getRequest();
            $cliente = new Cliente();
            
            $cliente->setNome($request["nome"]);
            $cliente->setSobrenome($request["sobrenome"]);
            $cliente->setCpf($request["cpf"]);
            $cliente->setDataNascimento($request["datanascimento"]);
            $cliente->setEmail($request["email"]);
            $cliente->setSenha($request["senha"]);
            
            $clienteDAO = new ClienteDAO();
            $id = $clienteDAO->cadastrarCliente($cliente);
            $this->addParameter("id", $id);
            $this->render("api/cadastro");
        }

    }