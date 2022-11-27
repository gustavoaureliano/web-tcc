<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="App/Views/pages/CSS/cadastro-login.css" media="screen" />
    <title> Cadastro - Etesp Universe</title>
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
        //     $nome = $_POST['nome'];
        //     $email = $_POST['email'];
        //     $senha = $_POST['senha'];
        //     $cpf = $_POST['cpf'];
        //     $nasc = $_POST['nasc'];

        //     $sql = $pdo->prepare("insert into `usuarios` values (null, ?, ?, ?, ?, ?)");
        //     $sql->execute(array($nome, $email, $senha, $cpf, $nasc));

        //     //$sql = $pdo->prepare("insert into `usuarios` values (null, ?, ?, ?, ?, ?)");
        //     //$sql->execute(array($nome, $senha, $email, $cpf, $nasc));
        // }

        //include "email.php"; 
    ?>

    <div class='divgrande2'>
        <div class="img-cadas">
            <img src="App/Views/pages/img/cadastro-img.jpg" />
        </div>
        
        <div class="img-cadas-mobile">
            
        </div>

        <div class="faixa2">
            <div class='info2'>
                <div class="logotipo">
                    <a href="home">
                        <img src="App/Views/pages/img/LogoRoxa2.png" />
                    </a>  
                </div>

                <h2> Cadastro </h2>
                <p> Crie sua conta e aproveite!</p>
                <form class="formCad" method="post">
                    <div class="input-nome">
                            <div class="titinput">
                                <h2> Nome: </h2>
                            </div> 
                            <input id="inputNome" type="text" name="nome" autocomplete="false" required/>
                    </div>

                    <div class="input-email2">
                            <div class="titinput">
                                <h2> Email: </h2>
                            </div> 
                            <input id="email-cadas" type="email" name="email" autocomplete="false" required/>
                    </div>

                    <div class="input-senha2">
                            <div class="titinput">
                                <h2> Senha: </h2>
                            </div> 
                            <input id="senha-cadas" type="text" name="senha" autocomplete="false" required/>
                    </div>

                    <div class="input-cpf-nasc">
                        <div class="input-cpf">
                                <div class="titinput">
                                    <h2> CPF: </h2>
                                </div> 
                                <input id="inputcpf" type="text" name="cpf" autocomplete="false" required/>
                        </div>
                        <div class="input-nasc">
                            <div class="titinput">
                                <h2> Nascimento: </h2>
                            </div> 
                            <input type="date" name="nasc" autocomplete="false" required/>
                        </div>
                    </div>

                    <div class="input-btn">
                        <input type="submit" name="acao2" value="Cadastrar"/>
                        <div class="cadas-login">
                            <p> Já criou a conta? </p>
                            <a class="cad-link" href="login"> <p> Login </p> </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>