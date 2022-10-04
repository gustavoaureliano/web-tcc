<?php
    namespace App\Controllers\Api;

    use App\Controllers\Controller;
    use App\DAO\ClienteDAO;
    use App\Models\Cliente;

    class AtualizarClienteController extends Controller {

        public function __construct() {
            parent::__construct();
        }

        public function executar() {

            $request = $this->getRequest();
            $cliente = new Cliente();
            $cliente->setIdCliente($request["idCliente"]);
            $cliente->setNome($request["nome"]);
            $cliente->setSobrenome($request["sobrenome"]);
            $cliente->setCpf($request["cpf"]);
            $cliente->setDataNascimento($request["datanascimento"]);
            $cliente->setEmail($request["email"]);
            $cliente->setSenha($request["senha"]);

            $clienteDAO = new ClienteDAO();
            $cadastro = $clienteDAO->atualizarCliente($cliente);
            $this->addParameter("sucesso", $cadastro);
            $this->render("api/atualizarCliente");

        }

    }

