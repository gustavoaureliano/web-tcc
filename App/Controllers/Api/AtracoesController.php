<?php
    namespace App\Controllers\Api;

    use App\Controllers\Controller;
    use App\DAO\AtracaoDAO;
 
    class AtracoesController extends Controller {

        public function __construct() {
            parent::__construct();
        }

        public function executar() {
            $request = $this->getRequest();
            $atracaoDAO = new AtracaoDAO();
            $url = $request["url"];
            $url = explode("/", $url);
            //echo count($url);
            try {
                if(count($url) > 2) {
                    $id = $url[2];
                    $atracao = $atracaoDAO->getAtracao($id);
                    $this->addParameter("atracao", $atracao);
                    $this->render("api/atracao");
                } else {
                    $atracoes = $atracaoDAO->getAllAtracoes();
                    $this->addParameter("atracoes", $atracoes);
                    $this->render("api/atracoes");
                }
            } catch (Exception $e){

            }
            //$command = $request["command"];

        }

    }