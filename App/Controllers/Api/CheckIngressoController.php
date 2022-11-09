<?php
    namespace App\Controllers\Api;

    use App\Controllers\Controller;
    use App\DAO\IngressoDAO;
 
    class CheckIngressoController extends Controller {

        public function __construct() {
            parent::__construct();
        }

        public function executar() {
            $request = $this->getRequest();
            $ingressoDAO = new IngressoDAO();
            $url = $request["url"];
            $url = explode("/", $url);
            //echo count($url);
            try {
                if(count($url) > 2) {
                    $id = $url[2];
                    $idCliente = $ingressoDAO->checkIngresso($id);
                    $this->addParameter("idCliente", $idCliente);
                    $this->render("api/checkIngresso");
                } else {
                    $this->addParameter("idCliente", -1);
                    $this->render("api/checkIngresso");
                }
            } catch (Exception $e){

            }
            //$command = $request["command"];

        }

    }