<?php
    namespace App\Controllers;

    use App\Controllers\Controller;
    use App\DAO\TestDAO;

    class TestController extends Controller {

        public function __construct() {
            parent::__construct();
        }

        public function executar() {
            $request = $this->getRequest();
            $command = $request["command"];
            if ($command === "test") {
                $testDAO = new TestDAO();
                $test = $testDAO->getTest();
                $this->addParameter("test", $test);
                
                $this->render("test");
                
            }

        }

    }