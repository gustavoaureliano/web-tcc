<?php
    namespace App\Controllers\Api;

    use App\Controllers\Controller;
    use App\DAO\ClienteDAO;
    use App\Models\Cliente;

    class LoginController extends Controller {

        public function __construct() {
            parent::__construct();
        }

        public function executar() {

            $request = $this->getRequest();
            $cliente = new Cliente();
            $cliente->setEmail($request["email"]);
            $cliente->setSenha($request["senha"]);
            
            $clienteDAO = new ClienteDAO();
            $login = $clienteDAO->checkLogin($cliente);
            $id = (int) $login["id"];
            $this->addParameter("id", $id);
            $this->render("api/login");
        }

    }