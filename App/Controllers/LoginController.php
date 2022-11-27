<?php
    namespace App\Controllers;

    use App\Controllers\Controller;
    use App\DAO\ClienteDAO;
    use App\Models\Cliente;

    class LoginController extends Controller {

        public function __construct() {
            parent::__construct();
        }

        public function executar() {

            $request = $this->getRequest();
            
            if (isset($request["acao"])) {

                $command = $request["acao"];

                if ($command == "Entrar") {
                    session_start();
                    $Clientedao = new ClienteDAO();
                    $Cliente = new Cliente();
                    $email = $_POST['email'];
                    $senha = $_POST['senha'];

                    $Cliente->setEmail($email);
                    $Cliente->setSenha($senha);
                    // echo $Cliente->getSenha();
                    $result = $Clientedao->checkLogin($Cliente);
                    // echo $result['id'];
                    $id = $result['id'];
                    
                    if($id > 0 ){
                        // $_SESSION['email'] = $email;
                        // $_SESSION['senha'] = $senha;
                        // $this->render("homeLogado");
                        $result = $Clientedao->getCliente($id);
                        $cliente = $result['cliente'];
                        $_SESSION['cliente'] = $cliente;
                        // var_dump($_SESSION['cliente']);
                        // echo $_SESSION['cliente']['Nome'];
                        echo "<script>location ='homeLogado';</script>";
                    }
                    else{
                        unset ($_SESSION['email']);
                        unset ($_SESSION['senha']);
                        echo "<script> location ='login'; </script>";                       
                        echo '<script> alert("Senha ou E-mail estão inválidos"); </script>';
                    }
                }
            } 
            else {
                $this->render("login");
            }

            // session_start();
            // $Clientedao = new ClienteDAO();
            // $Cliente = new Cliente();

            // $Cliente->setEmail($_POST['email']);
            // $Cliente->setSenha($_POST['senha']);
            // $result = $ClienteDAO->checklogin($Cliente);
            
            // if($result > 0 ){
            //     $_SESSION['email'] = $email;
            //     $_SESSION['senha'] = $senha;
            //     header('location: http://localhost/TCC-Curso-Tecnico-Etesp/WEB/App/View/pages/home.php');
            //     echo 'logado';
            // }
            // else{
            //     unset ($_SESSION['email']);
            //     unset ($_SESSION['senha']);
            //     header('location: http://localhost/TCC-Curso-Tecnico-Etesp/WEB/App/View/pages/login.php');
            //     echo 'não logado';
            // }
        }

    }
?>