<?php
    namespace App\Controllers;

    use App\Controllers\Controller;
    use App\DAO\TestDAO;

    class AtracaoEDIController extends Controller {

        public function __construct() {
            parent::__construct();
        }

        public function executar() {
            $this->render("atracaoEDI");
        }

    }
?>