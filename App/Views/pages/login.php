<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="App/Views/pages/CSS/cadastro-login.css" media="screen" />
    <title> Login - Etesp Universe</title>
</head>
<body>

    <?php
        // try{
        //     $pdo = new PDO('mysql:host=localhost;dbname=tcctestes','root','', array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));       
        // }
        // catch (Exeception $e) {
        //     echo "Erro ao conectar ao banco de dados";
        // }
        
        // if(isset($_POST['acao'])){
        //     $email = $_POST['email'];
        //     $senha = $_POST['senha'];

        //     $link = mysql_connect("localhost", "root", "");
        //     mysql_select_db("tcctestes", $link);
        //     $result = mysql_query($link, "select * from usuarios where email='$email' and senha='$senha'");
        //     $num_rows = mysql_num_rows($result);

        //     if ($numrows == 0){
        //          header('Location:home');
        //     }
            
        // }
    ?>

    <div class="divgrande1">
        <div class="img-cadas">
            <img src="App/Views/pages/img/login-img.jpg" />
        </div>

        <div class="img-cadas-mobile">
            
        </div>

        <div class="faixa">
            <div class="info">
                
                <div class="logotipo">
                    <a href="home">
                        <img src="App/Views/pages/img/LogoRoxa2.png" />
                    </a>    
                </div>

                <h2> Login </h2>
                <p> Entre e garanta seu ingresso </p>

                <form class="formLog" method="post">
                    <div class="input-email">
                            <div class="titinput">
                                <h2> E-mail: </h2>
                            </div> 
                            <input type="email" name="email" autocomplete="false" required/>
                    <div>
                    <div class="input-senha">
                            <div class="titinput2">
                                <h2> Senha: </h2>
                            </div> 
                            <div class="cima">
                                <input type="password" id="senha" name="senha" autocomplete="false" required/>
                                <div class="esconde">
                                    <img src="App/Views/pages/img/senha-invisivel.png" id="imgsenha" />
                                </div>
                            </div>
                    </div>
                    <div class="input-lembrar">
                        <div class="efeito-lembrar">
                                <div class="lembrar">
                                    <label class="switch">
                                        <div class="switch-wrapper">
                                            <input type="checkbox"/> 
                                            <span class="switch-button"></span>
                                        </div>
                                        <span> Lembrar de mim </span>
                                    </label>
                                </div>

                            <div class="esq-senha">
                                <a class="esq-senha-link" href=""> <p> Esqueceu a senha? </p> </a>
                            </div>
                        </div>
                        
                    </div>
                    
                    <div class="input-btn">
                        <input type="submit" name="acao" value="Entrar"/>
                        <div class="cadas-login">
                            <p> Ainda não tem conta? </p>
                            <a class="cad-link" href="cadastro"> <p> Cadastrar-se </p> </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        </div>

        <script> 
            let divinput = document.querySelector(".input-senha");
            let input = document.querySelector("#senha");
            let icon = document.querySelector("#imgsenha");

            icon.addEventListener('click', function() {
                divinput.classList.toggle('visible');
                if(divinput.classList.contains('visible')) {
                    icon.src = 'App/Views/pages/img/senha-invisivel.png';
                    input.type = 'password';
                } else {
                    icon.src = 'App/Views/pages/img/senha-visivel.png';
                    input.type = 'text';
                }
            });
        </script>
</body>
</html>