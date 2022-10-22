<?php
    namespace App\Controllers\Api;

    use App\Controllers\Controller;
    use App\DAO\ClienteDAO;
    use App\Models\Cliente;

    class AtualizarFotoClienteController extends Controller {

        public function __construct() {
            parent::__construct();
        }

        public function executar() {

            $request = $this->getRequest();
            $data = $this->getContents();
            //$headers = get_headers();
            $content_length = $_SERVER["CONTENT_LENGTH"];

            //$image = "./App/Views/pages/api/images/zoro.jpg";
            $type = 'image/jpeg';
            //header('Content-Type:'.$type);
            //header('Content-Length: ' . filesize($image));
            header('Content-Length: ' . $content_length);
            //readfile($image);
            $clienteDAO = new ClienteDAO();
            $url = $request["url"];
            $url = explode("/", $url);
            //echo count($url);
            //echo "length: ".$content_length."<br>";
            try {
                if(count($url) > 2 && $content_length > 0) {
                    $id = $url[2];
                    $clienteDAO = new ClienteDAO();
                    $atualizar = $clienteDAO->setFotoCliente($data, $id);
                    $this->addParameter("sucesso", $atualizar);
                    $this->render("api/atualizarFotoCliente");
                } else {
                    
                    $this->addParameter("sucesso", 0);
                    $this->render("api/atualizarFotoCliente");
                }
            } catch (Exception $e){

            }
            
            

            //echo $foto;

            //$sql = "update tblcliente set Foto = :foto where idCliente = :idCliente";
            //$stmt = $conn->prepare($sql);
            //$stmt->bindValue(":foto", $foto);
            //$stmt->bindValue(":idCliente", $idCliente);
            //$stmt->execute();

            //echo $data;
            //var_dump($data);
            //var_dump($_SERVER);

        }

    }

