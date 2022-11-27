<?php
    namespace App\Controllers;

    use App\Controllers\Controller;
    use App\DAO\IngressoDAO;
    use App\Models\Cliente;
    use App\Models\ItemCarrinho;

    class IngressosLogadoController extends Controller {

        public function __construct() {
            parent::__construct();
        }

        public function executar() {
            $request = $this->getRequest();

            // getTipoIngresso;

            if (isset($request["acao"])) {

                $command = $request["acao"];

                if ($command == "Adicionar") {
                    // session_start();
                    // $Clientedao = new ClienteDAO();
                    $Ingressodao = new IngressoDAO();
                    $Cliente = new Cliente();

                    $idIngresso = $request['idIngresso'];
                    // echo $idEvento;
                    
                    $tipoingresso = $Ingressodao->getTipoIngresso($idIngresso);
                    // var_dump($tipoingresso);
                    // $_SESSION['nomeProd'] = $tipoingresso[0]['Descricao'];
                    $nomeProd = $tipoingresso[0]['Descricao'];
                    $preco = $tipoingresso[0]['Preco'];
                    $foto = $tipoingresso[0]['Foto'];

                    $ItemCarrinho = new ItemCarrinho();
                    $ItemCarrinho->setIdTipoIngresso($idIngresso);
                    $ItemCarrinho->setProdNome($nomeProd);
                    $ItemCarrinho->setPreco($preco);
                    $ItemCarrinho->setQuantidade(1);
                    $ItemCarrinho->setFoto($foto);

                    session_start();
                    // $_SESSION['carrinho'] = array();

                    if(isset($_SESSION['carrinho'])){
                        // echo 'sim';

                        $tamanho = count($_SESSION['carrinho']);
                        $novo = true;

                        if ($tamanho > 0) {
                            for ($i = 0; $i < $tamanho ;$i++) {
                                // echo $_SESSION['carrinho'][$i]->getIdTipoIngresso();
    
                                // echo $ItemCarrinho->getIdTipoIngresso().'|';
                                // echo $_SESSION['carrinho'][$i]->getIdTipoIngresso().'.<br>';
                                
                                if ($ItemCarrinho->getIdTipoIngresso() == $_SESSION['carrinho'][$i]->getIdTipoIngresso()) {
                                    $novaQuant = $_SESSION['carrinho'][$i]->getQuantidade() + 1;
                                    $_SESSION['carrinho'][$i]->setQuantidade($novaQuant);
                                    // echo 'já existe'.'<br>';
                                    $novo = false;
                                    break;
                                } // else{
                                //     array_push($_SESSION['carrinho'], $ItemCarrinho);
                                //     echo 'novo'.'<br>';
                                // }
                            }


                        } //else {
                            //array_push($_SESSION['carrinho'], $ItemCarrinho);
                        //}

                        if ($novo) {
                            array_push($_SESSION['carrinho'], $ItemCarrinho);
                        }

                        // echo "<pre>";
                        // var_dump($_SESSION['carrinho']);



                        // echo "<pre>";
                            // var_dump($_SESSION['carrinho']);
                        // echo "</pre>";
                        $this->render("ingressosLogado");

                    } else{
                        // echo 'não';
                        $_SESSION['carrinho'] = array($ItemCarrinho);
                        // echo "<pre>";
                        // var_dump($_SESSION['carrinho']);
                        // echo "</pre>";
                        $this->render("ingressosLogado");
                    }
                }
            } 
            else {
                $this->render("ingressosLogado");
            }
        }
    }
?>