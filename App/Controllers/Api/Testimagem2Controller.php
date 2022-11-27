<?php
    namespace App\Controllers\Api;

    use App\Controllers\Controller;
    use App\DAO\ClienteDAO;
    use App\DAO\IngressoDAO;
    use App\Models\Cliente;

    class Testimagem2Controller extends Controller {

        public function __construct() {
            parent::__construct();
        }

        public function executar() {

            $request = $this->getRequest();
            //$this->addParameter("id", $id);
            //$this->render("api/cadastro");

            //$data = $this->getContents();
            //$headers = get_headers();
            //$content_length = $_SERVER["CONTENT_LENGTH"];

            //$image = "./App/Views/pages/api/images/zoro.jpg";
            //$type = 'image/jpeg';
            //header('Content-Type:'.$type);
            //header('Content-Length: ' . filesize($image));
            //header('Content-Length: ' . $content_length);
            //readfile($image);

            
            //$array = array(); 
            //foreach(str_split($data) as $char){ 
            //    array_push($array, ord($char)); 
            //}
            //var_dump(implode(' ', $array));
            
            
            $ingressoDAO = new IngressoDAO();
            //$clienteDAO->setFotoCliente($data, 2);
            $foto = $ingressoDAO->getFotoTipoIngresso(1);

            echo base64_encode($foto);

            echo "<img src='data:image/jpeg;base64, ".base64_encode($foto)."' alt='Red dot' />";


            //$sql = "update tblcliente set Foto = :foto where idCliente = :idCliente";
            //$stmt = $conn->prepare($sql);
            //$stmt->bindValue(":foto", $foto);
            //$stmt->bindValue(":idCliente", $idCliente);
            //$stmt->execute();

            //echo $data;
            //var_dump($_SERVER);

        }

    }