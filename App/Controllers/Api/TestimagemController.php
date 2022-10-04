<?php
    namespace App\Controllers\Api;

    use App\Controllers\Controller;
    use App\DAO\ClienteDAO;
    use App\Models\Cliente;

    class TestimagemController extends Controller {

        public function __construct() {
            parent::__construct();
        }

        public function executar() {

            $request = $this->getRequest();
            //$this->addParameter("id", $id);
            //$this->render("api/cadastro");

            $data = $this->getContents();
            //$headers = get_headers();
            $content_length = $_SERVER["CONTENT_LENGTH"];

            //$image = "./App/Views/pages/api/images/zoro.jpg";
            $type = 'image/jpeg';
            header('Content-Type:'.$type);
            //header('Content-Length: ' . filesize($image));
            header('Content-Length: ' . $content_length);
            //readfile($image);

            
            $array = array(); 
            foreach(str_split($data) as $char){ 
                array_push($array, ord($char)); 
            }
            //var_dump(implode(' ', $array));
            
            
            $clienteDAO = new ClienteDAO();
            $clienteDAO->setFoto($data, 2);
            $foto = $clienteDAO->getFoto(2);

            echo $foto;

            //$sql = "update tblcliente set Foto = :foto where idCliente = :idCliente";
            //$stmt = $conn->prepare($sql);
            //$stmt->bindValue(":foto", $foto);
            //$stmt->bindValue(":idCliente", $idCliente);
            //$stmt->execute();

            //echo $data;
            //var_dump($_SERVER);

        }

    }