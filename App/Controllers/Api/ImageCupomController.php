<?php
    namespace App\Controllers\Api;

    use App\Controllers\Controller;
    use App\DAO\CupomDAO;
    use App\Models\Cliente;

    class ImageCupomController extends Controller {

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
                    $cupomDAO = new CupomDAO();
                    $image = $cupomDAO->getFotoCupom($id);
                    $this->addParameter("image", $image);
                    $this->render("api/image");
                }
            } else {
                echo "missing id";
            }
        }

    }