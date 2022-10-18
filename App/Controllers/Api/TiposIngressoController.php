<?php
    namespace App\Controllers\Api;

    use App\Controllers\Controller;
    use App\DAO\IngressoDAO;
 
    class TiposIngressoController extends Controller {

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
                    $ingresso = $ingressoDAO->getTipoIngresso($id);
                    $this->addParameter("ingressos", $ingresso);
                    $this->render("api/ingressos");
                } else {
                    $ingresso = $ingressoDAO->getAllTiposIngresso();
                    $this->addParameter("ingressos", $ingresso);
                    $this->render("api/ingressos");
                }
            } catch (Exception $e){

            }
            //$command = $request["command"];

        }

    }