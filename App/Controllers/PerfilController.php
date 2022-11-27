<?php
    namespace App\Controllers;

    use App\Controllers\Controller;
    use App\DAO\ClienteDAO;
    use App\Models\Cliente;

    class PerfilController extends Controller {

        public function __construct() {
            parent::__construct();
        }

        public function executar() {           
            session_start();
            // $email = $_SESSION['email'];
            // $senha = $_SESSION['senha'];
            // var_dump($_SESSION['cliente']);
            $id = $_SESSION['cliente']['idCliente'];

            $Clientedao = new ClienteDAO();
            $result = $Clientedao->getCliente($id);
            $cliente = $result['cliente'];
            $_SESSION['cliente'] = $cliente;

            $nome = $cliente['Nome'];
            $email = $cliente['Email'];
            $senha = $cliente['Senha'];
            $cpf = $cliente['CPF'];
            $img = $cliente['Foto'];
            $nasc = $cliente['DataNacimento'];
            

            // var_dump($cliente);
            // $nasc = $cliente['nome'];
            // echo $result["cliente"]['CPF'];
            // echo print_r($result);
            // echo $result["cliente"]['Foto'];
            // echo $_SESSION['img']; ainda n deu certo

            // $_SESSION['imgPerfil'] = $Clientedao->getFotoCliente($result["cliente"]['idCliente']);

            // $dom = new DOMDocument();
            // $dom->loadHTML($data);
    
            // $divImg = $dom->getElementById("divImgPerfil");
    
            // if (!$divImg) {
            //     echo 'img não encontrado';
            // } else {
            //     $imgs = $divImg->getElementsByTagName('img');
                
            //     if (!$imgs->length) {
            //         echo 'Não há imagens dentro de #output';
            //     } else {
            //         echo var_dump( $imgs[0]->getAttribute('src') );
            //     }
            // }

    
            // $type = 'image/jpeg';
            // header('Content-Type:'.$type);
            // $_SESSION['img'] = $mysqlImg;


            $request = $this->getRequest();
            
            if (isset($request["Mudar"])) {

                $command = $request["Mudar"];

                if ($command == "Atualizar") {
                    $Clientedao = new ClienteDAO();
                    $Cliente = new Cliente();

                    $nome = $_POST['nome'];
                    $email = $_POST['email'];
                    $senha = $_POST['senha'];
                    $cpf = $_POST['cpf'];
                    // $img = $_POST['imgPerfil'];

                    $Cliente->setIdCliente($id);
                    $Cliente->setNome($nome);
                    $Cliente->setSobrenome('-');
                    $Cliente->setCpf($cpf);
                    $Cliente->setDataNascimento($nasc);
                    $Cliente->setEmail($email);
                    $Cliente->setSenha($senha);

                    $file = $_FILES['img'];
                    // print_r($file);

                    if ($file['size'] > 0){
                        $fileName = $_FILES['img']['name'];
                        $fileType = $_FILES['img']['type'];
                        $fileTmpName = $_FILES['img']['tmp_name'];
                        $fileError = $_FILES['img']['error'];
                        $fileSize = $_FILES['img']['size'];
                
                        // $fileExt = explode('.', $fileName);
                        // $fileActualExt = strtolower(end($fileExt));
                        // $allowed = array('jpg', 'jpeg', 'png', 'pdf');
                            
                        $tamanhoImg = filesize($fileTmpName); 
                        $mysqlImg = fread(fopen($fileTmpName, "r"), $tamanhoImg);
                        $Clientedao->setFotoCliente($mysqlImg, $Cliente->getIdCliente());
                        $_SESSION['cliente']['Foto'] = $mysqlImg;
                    }


                    $result = $Clientedao->atualizarCliente($Cliente);
                    $_SESSION['cliente']['Nome'] = $nome;
                    $_SESSION['cliente']['Email'] = $email;
                    $_SESSION['cliente']['Senha'] = $senha;
                    $_SESSION['cliente']['DataNascimento'] = $nasc;
                    $_SESSION['cliente']['CPF'] = $cpf;
                    

                    
                    // echo "<pre>";
                    // print_r($result);
                    echo "<meta HTTP-EQUIV='refresh' CONTENT='0'>";
                    // $this->render("perfil");

                }

            } else{
                $this->render("perfil");
            }

            
        }

    }
?>