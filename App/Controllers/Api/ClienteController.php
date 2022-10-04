<?php
    namespace App\Controllers\Api;

    use App\Controllers\Controller;
    use App\DAO\ClienteDAO;
 
    class ClienteController extends Controller {

        public function __construct() {
            parent::__construct();
        }

        public function executar() {
            $request = $this->getRequest();
            $clienteDAO = new ClienteDAO();
            $url = $request["url"];
            $url = explode("/", $url);
            //echo count($url);
            try {
                if(count($url) > 2) {
                    $id = $url[2];
                    $data = $clienteDAO->getCliente($id);
                    $this->addParameter("success", $data["success"]);
                    $this->addParameter("cliente", $data["cliente"]);
                    $this->render("api/cliente");
                } else {
                    $data = $clienteDAO->getAllClientes();
                    $this->addParameter("success", $data["success"]);
                    $this->addParameter("cliente", $data["cliente"]);
                    $this->render("api/cliente");
                }
            } catch (Exception $e){

            }
            //$command = $request["command"];

        }

    }