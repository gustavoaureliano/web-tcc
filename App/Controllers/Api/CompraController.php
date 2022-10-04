<?php
    namespace App\Controllers\Api;

    use App\Controllers\Controller;
    use App\DAO\IngressoDAO;
    use App\Models\Cliente;
    use App\Models\Pedido;
    use App\Models\Ingresso;

    class CompraController extends Controller {

        public function __construct() {
            parent::__construct();
        }

        public function executar() {

            $request = $this->getRequest();
            $contents = $this->getContents();
            $dados = json_decode(file_get_contents('php://input'));
            
            if ($dados) {
                $idCliente = $dados->idCliente;
                $idCupom = $dados->idCupom;
                $ingressosArr = $dados->ingressos;
                
                $ingressos = array();
                for ($i = 0; $i < count($ingressosArr); $i++) {
                    $ingresso = new Ingresso();
                    $ingresso->setIdTipoIngresso($ingressosArr[$i]->tipo);
                    $ingresso->setDataInicio($ingressosArr[$i]->dataInicio);
                    $ingresso->setDataValidade($ingressosArr[$i]->dataValidade);
                    //var_dump($ingresso);
                    array_push($ingressos, $ingresso);
                }
                
                $pedido = new Pedido();
                $pedido->setIdCliente($idCliente);
                $pedido->setIdCupom($idCupom);
                $pedido->setIngressos($ingressos);
                
                $ingressosDAO = new IngressoDAO();
                $compra = $ingressosDAO->comprarIngresso($pedido);
                $this->addParameter("idPedido", $compra);
                $this->render("api/compra");
            }
        }

    }