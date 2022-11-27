<?php
    namespace App\Controllers\Api;

    use App\Controllers\Controller;
    use App\DAO\IngressoDAO;
 
    class IngressosController extends Controller {

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
                    $ingressos = $ingressoDAO->getIngressoCliente($id);
                    for ($i = 0; $i < count($ingressos); $i++) {
                        unset($ingressos[$i]["Foto"]);
                        //var_dump($ingressos[$i]);
                    }
                    $this->addParameter("ingressos", $ingressos);
                    $this->render("api/ingressos");
                } else {
                    $ingressos = $ingressoDAO->getAllIngressos();
                    for ($i = 0; $i < count($ingressos); $i++) {
                        unset($ingressos[$i]["Foto"]);
                        //var_dump($ingressos[$i]);
                    }
                    $this->addParameter("ingressos", $ingressos);
                    $this->render("api/ingressos");
                }
            } catch (Exception $e){

            }
            //$command = $request["command"];

        }

    }