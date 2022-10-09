<?php
    namespace App\Controllers\Api;

    use App\Controllers\Controller;
    use App\DAO\ClienteDAO;
    use App\Models\Cliente;

    class ImageClienteController extends Controller {

        public function __construct() {
            parent::__construct();
        }

        public function executar() {

            $request = $this->getRequest();
            
            $data = $this->getContents();
            
            $url = $request["url"];
            $url = explode("/", $url);
            //echo count($url);
            if(count($url) > 2) {
                $id = $url[2];
                if ($id > 0) {
                    $clienteDAO = new ClienteDAO();
                    $image = $clienteDAO->getFotoCliente($id);
                    $this->addParameter("image", $image);
                    $this->render("api/image");
                }
            } else {
                echo "missing id";
            }
        }

    }