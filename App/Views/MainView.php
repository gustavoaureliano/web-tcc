<?php
    namespace App\Views;

    class MainView 
    {
        private $fileName;
        //private $menu;
        //private $footer;

        //public $menuItems = array('Home', 'Sobre', 'Contato');

        public function __construct($fileName){
            $this->fileName = $fileName;
            //echo "<br>FileName: ".$this->fileName;
        }

        public function render($parametros = []){
            include('pages/'.$this->fileName.'.php');
        }
    }
?>