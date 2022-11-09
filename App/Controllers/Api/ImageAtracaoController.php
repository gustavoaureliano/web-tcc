<?php
    namespace App\Controllers\Api;

    use App\Controllers\Controller;
    use App\DAO\AtracaoDAO;
    use App\Models\Cliente;

    class ImageAtracaoController extends Controller {

        public function __construct() {
            parent::__construct();
        }

        public function executar() {

            $request = $this->getRequest();
            
            $url = $request["url"];
            $url = explode("/", $url);
            //echo count($url);
            if(count($url) > 2) {
                $id = $url[2];
                if ($id > 0) {
                    $atracaoDAO = new AtracaoDAO();
                    $image = $atracaoDAO->getFotoAtracao($id);
                    $this->addParameter("image", $image);
                    $this->render("api/image");
                }
            } else {
                echo "missing id";
            }
        }

    }