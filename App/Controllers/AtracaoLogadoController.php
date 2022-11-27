<?php
    namespace App\Controllers;

    use App\Controllers\Controller;
    use App\DAO\ClienteDAO;
    use App\Models\Cliente;

    class AtracaoLogadoController extends Controller {

        public function __construct() {
            parent::__construct();
        }

        public function executar() {
            $this->render("atracaoLogado");
        }
    }
?>