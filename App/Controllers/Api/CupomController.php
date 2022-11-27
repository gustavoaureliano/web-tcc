<?php
    namespace App\Controllers\Api;

    use App\Controllers\Controller;
    use App\DAO\CupomDAO;
 
    class CupomController extends Controller {

        public function __construct() { 
            parent::__construct();
        }

        public function executar() {
            $request = $this->getRequest();
            $cupomDAO = new CupomDAO();
            $url = $request["url"];
            $url = explode("/", $url);
            //echo count($url);
            try {
                if(count($url) > 2) {
                    $id = $url[2];
                    $cupons = $cupomDAO->getCuponsCliente($id);
                    for ($i = 0; $i < count($cupons); $i++) {
                        unset($cupons[$i]["Foto"]);
                    }
                    $this->addParameter("cupons", $cupons);
                    $this->render("api/cupons");
                } else {
                    $cupons = $cupomDAO->getAllCupons();
                    for ($i = 0; $i < count($cupons); $i++) {
                        unset($cupons[$i]["Foto"]);
                    }
                    $this->addParameter("cupons", $cupons);
                    $this->render("api/cupons");
                }
            } catch (Exception $e){

            }
            //$command = $request["command"];

        }

    }