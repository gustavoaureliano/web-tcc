<?php
    namespace App\Controllers;

    use App\Controllers\Controller;
    use App\DAO\IngressoDAO;
    use App\Models\Pedido;

    class CartaoController extends Controller {

        public function __construct() {
            parent::__construct();
        }

        public function executar() {
            $request = $this->getRequest();
            session_start();

            if (isset($request["acao"])) {

                $command = $request["acao"];

                if ($command == "Concluir") {
                    if (isset($_SESSION['cupom']['idCupom'])){
                        $idCupom = $_SESSION['cupom']['idCupom'];
                    } else {
                        $idCupom = -1;
                    }
                    $ingressos = $_SESSION['carrinho'];
                    $idCliente = $_SESSION['cliente']['idCliente'];

                    $pedido = new Pedido();

                    $pedido->setIngressos($ingressos);
                    $pedido->setIdCliente($idCliente);
                    $pedido->setIdCupom($idCupom);

                    // echo "<pre>";
                    // var_dump($pedido);
                    $ingressodao = new IngressoDAO();
                    $ingressodao->comprarIngresso($pedido);

                    if (isset($_SESSION['cuponsUsados'])){
                        array_push($_SESSION['cuponsUsados'], $idCupom);
                    }else {
                        $_SESSION['cuponsUsados'] = array($idCupom);
                    }
                }
                
                echo "<script> alert('Compra Concluída') </script>";
                $_SESSION['cupom'] = null;
                $_SESSION['carrinho'] = null;
                $this->render("homeLogado");
            } else {
                $this->render("cartao");
            }

        }

    }
?>