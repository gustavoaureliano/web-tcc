<?php
    namespace App\Controllers;

    use App\Controllers\Controller;
    use App\DAO\CupomDAO;
    use App\Models\Cliente;

    class CuponsLogadoController extends Controller {

        public function __construct() {
            parent::__construct();
        }

        public function executar() {
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
            
            // $_SESSION['cuponsUsados'] = null;
            // $_SESSION['cupons'] = $cupons;
            $_SESSION['cupons'] = $cupons;

            // echo "<pre>";
            // var_dump($cupons);

            $this->render("cuponsLogado");
        }
    }
?>