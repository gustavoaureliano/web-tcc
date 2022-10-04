<?php
    namespace App;
    //define('INCLUDE_PATH', 'http://localhost/MVC/');
    //define('INCLUDE_PATH_FULL', 'http://localhost/MVC/Views/pages/');
    class Application
    {
        public function executar(){
            if (isset($_GET['url'])) {
                $url = explode('/', $_GET['url']);
            } else {
                $url = "Home";
            }

            if ($url[0] == "api") { 
                //var_dump($url);
                array_shift($url);
                $class = $url[0];
                $class = ucfirst($class);
                $class.="Controller";
                //echo $class."<br>";
                if(file_exists('App/Controllers/Api/'.$class.'.php')){
                    $className = 'App\\Controllers\\Api\\'.$class;
                    //echo '<br>estou carregando a classe '.$className.'<br>';
                    $controler = new $className;
                    $controler->executar();
                }else{
                    die("Não existe esse controlador");
                }
            } else {
                $class = $url[0];
                $class = ucfirst($class);
                $class.="Controller";
                //echo $class."<br>";
                if(file_exists('App/Controllers/'.$class.'.php')){
                    $className = 'App\\Controllers\\'.$class;
                    //echo '<br>estou carregando a classe '.$className.'<br>';
                    $controler = new $className;
                    $controler->executar();
                }else{
                    die("Não existe esse controlador");
                }
            }
        }
    }
?>