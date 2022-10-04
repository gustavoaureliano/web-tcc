<?php
    namespace App\Controllers;
    
    use App\Views\MainView; 

    class Controller {

        private $view;
        private $model;
        private $request;
        private $parametros = array();
        private $contents = null;

        public function __construct() {
            $this->request = $_REQUEST;
            $this->contents = file_get_contents('php://input');
        }

        public function executar() {}

        public function getRequest() {
            return $this->request;
        }

        public function getContents() {
            return $this->contents;
        }

        public function addParameter($key, $value) {
            $this->parametros[$key] = $value;
        }

        public function render($fileName) {
            $this->view = new MainView($fileName);
            $this->view->render($this->parametros);
        }

    }
    