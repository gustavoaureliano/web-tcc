<?php
    namespace App\Controllers;

    use App\Controllers\Controller;
    use App\DAO\ClienteDAO;
    use App\Models\Cliente;

    class CadastroController extends Controller {

        public function __construct() {
            parent::__construct();
        }

        public function executar() {    
            $this->render("cadastro");        
            // $Clientedao = new ClienteDAO();
            // $Cliente = new Cliente();

            // $Cliente->setNome($_POST["nome"]);
            // $Cliente->setEmail($_POST["email"]);
            // $Cliente->setSenha($_POST["senha"]);
            // $Cliente->setCpf($_POST["cpf"]);
            // $Cliente->setDataNascimento($_POST["nasc"]);

            // $Clientedao->cadastrarCliente($Cliente);
            
            $request = $this->getRequest();
            

            if (isset($request["acao2"])) {

                $command = $request["acao2"];

                if ($command == "Cadastrar") {
                    $Clientedao = new ClienteDAO();
                    $Cliente = new Cliente();

                    $Cliente->setNome($_POST["nome"]);
                    $Cliente->setSobrenome('-');
                    $Cliente->setEmail($_POST["email"]);
                    $Cliente->setSenha($_POST["senha"]);
                    $Cliente->setCpf($_POST["cpf"]);
                    $Cliente->setDataNascimento($_POST["nasc"]);

                    // echo "<pre>";
                    // var_dump($Cliente);
                    // echo "</pre>";
                    
                    $Clientedao->cadastrarCliente($Cliente);
                    
                    
                }
            } 
    

        }

    }
?>