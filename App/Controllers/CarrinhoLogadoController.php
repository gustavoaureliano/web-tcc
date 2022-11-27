<?php
    namespace App\Controllers;

    use App\Controllers\Controller;
    use App\DAO\ClienteDAO;
    use App\DAO\IngressoDAO;
    use App\DAO\CupomDAO;
    use App\Models\Cliente;

    class CarrinhoLogadoController extends Controller {

        public function __construct() {
            parent::__construct();
        }

        public function executar() {
            $request = $this->getRequest();
            session_start();

            $id = $_SESSION['cliente']['idCliente'];
            // echo $id;
            $cupomDao = new CupomDAO();
            $cupons = $cupomDao->getCuponsCliente($id);
            
            if (isset($_SESSION['cuponsUsados'])){
                $cuponsUsados = $_SESSION['cuponsUsados'];

                for ($i = 0; $i < count($cupons) ;$i++) {
                    for ($k = 0; $k < count($cuponsUsados) ;$k++) {
                        if ($cupons[$i]['idCupom'] == $cuponsUsados[$k]) {
                            unset($cupons[$i]);
                            break;
                        }
                    }
                }
            }

            $_SESSION['cupons'] = $cupons;
        

            // $tamanho = count($_SESSION['carrinho']);
            // for ($i = 0; $i < $tamanho; $i++) {
            //     $Ingressodao = new IngressoDAO();
    
            //     // $idIngressoEvento = $request['idEvento'];
            //     $idIngressoEvento = $_SESSION['carrinho'][$i]->getIdIngresso();
            //     $tipoingresso = $Ingressodao->getTipoIngresso($idIngressoEvento);
            //     $nomeProd = $tipoingresso[0]['Descricao'];
            //     $preco = $tipoingresso[0]['Preco'];
            //     $foto = $tipoingresso[0]['Foto'];
            //     // echo "<pre>";
            //     // var_dump($_SESSION['carrinho']);
            //     // $ItemCarrinho = new ItemCarrinho();

            //     $_SESSION['carrinho'][$i]->setIdTipoIngresso($idIngressoEvento);
            //     $_SESSION['carrinho'][$i]->setProdNome($nomeProd);
            //     $_SESSION['carrinho'][$i]->setPreco($preco);
            //     $_SESSION['carrinho'][$i]->setQuantidade(1);
            //     $_SESSION['carrinho'][$i]->setFoto($foto);
            // }

            if (isset($request["acao"])) {

                $command = $request["acao"];

                if ($command == "deletar") {
                    // session_start();
                    // $Clientedao = new ClienteDAO();

                    $index = $request['index'];
                    // $quant = $_SESSION['carrinho'][$index]->getQuantidade()+1;
                    // $_SESSION['carrinho'][$index]->setQuantidade($quant);
                    // var_dump($_SESSION['carrinho'][$index]->getQuantidade());

                    // $_SESSION['carrinho'][$index];
                    unset($_SESSION['carrinho'][$index]);

                    $this->render("carrinhoLogado");

                } else if ($command == "verificarCupom") {
                    $idCupom = $request['cupom'];

                    $cupomDao = new CupomDAO();
                    $cupom = $cupomDao->getCupom($idCupom);
                    $_SESSION['cupom'] = $cupom;
                    $this->render("carrinhoLogado");

                } else if ($command = "redirecionar"){
                    $total = $request['total'];
                    $_SESSION['Total'] = $total;
                    echo "<script> location ='pagamentoLobby' </script>";                       
                }
            }
            else {
                $this->render("carrinhoLogado");
            }
            
            // $this->render("carrinhoLogado");


        }
    }
?>