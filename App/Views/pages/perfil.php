<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="App/Views/pages/CSS/perfil.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="App/Views/pages/CSS/footer.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="App/Views/pages/CSS/menuLogado.css" media="screen" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <title> Perfil </title>
</head>
<body>
    <?php
        // session_start();
        // $email = $_SESSION['email'];
        // echo $_SESSION['senha'];
        // $sql = "select * from tblcliente where nome =$email";
        // echo $sql;

        // $Clientedao = new ClienteDAO();
        // $result = $Clientedao->getCliente($email);
        // echo $result;

        $cliente = $_SESSION['cliente'];
        $id = $cliente['idCliente'];
        $nome = $cliente['Nome'];
        $email = $cliente['Email'];
        $senha = $cliente['Senha'];
        $cpf = $cliente['CPF'];
        $img = $cliente['Foto'];

        // var_dump($cliente);

        // $img = $_SESSION['#imagem-perfil'];

        // $imagem = $_FILES["img"];
        // echo $_FILES['img'];
        // echo $imagem;
    

        // $tamanhoImg = filesize($fileTmpName); 
        // $mysqlImg = addslashes(fread(fopen($fileTmpName, "r"), $tamanhoImg));

        // $type = 'image/jpeg';
        // header('Content-Type:'.$type);
        // $_SESSION['img'] = $mysqlImg;
        // echo $_SESSION['imgPerfil'];
        // $img64 = base64_encode($_SESSION['imgPerfil']);
        // echo $img64;
    ?>

    <?php
        include 'Templates/menuLogado.php';
    ?>

    <div class="div-grande-perfil">
        <div class="div-esquerda">
            <div class="div-tit">
                <h2> Perfil </h2>
            </div>
        
            <!-- <div class="caixa-imagem">
                <img id="imagemPerfil" src="App/Views/pages/img/gato1.jpg">
            </div>

            <div class="div-btn-perfil">
                <label for='escolher'> Escolher Imagem </label>
                <input id="escolher" class="btnChoseImage" type="file" name="btnimg"/>
            </div> -->

            <div class="caixa-imagem">
                <!-- <img id="imagemPerfil" src="App/Views/pages/img/sem-imagem.png"> -->
                <?php
                    if (isset($img))
                    {
                        $img64 = base64_encode($img);
                        echo "<img id='imagemPerfil' src='data:image/jpeg;base64, $img64'> ";
                    } 
                    else{
                        echo "<img id='imagemPerfil' src='App/Views/pages/img/sem-imagem.png'> ";
                    }
                ?>
            </div>

            <div class="div-btn-perfil">
                <form method="post" enctype="multipart/form-data">
                    <label for='escolher'> Escolher Imagem </label>
                    <input form="formAtualizar" type="file" id="escolher" class="btnChoseImage" name="img"/>
                    <!-- <button class="btnSalvar" type="submit" name="submit"> Salvar </button> -->
                </form>
            </div>
        </div>

        <div class="div-direita">
            <form id="formAtualizar" class="formPerfil" method="post" enctype="multipart/form-data">
                <div class="div-nome">
                    <h2> Nome: </h2>
                    <input id="txtNome" type="text" name="nome" value="<?php echo $nome ?>" autocomplete="false"/>
                </div>

                <div class="div-email">
                    <h2> Email: </h2>
                    <input id="txtEmail" type="email" name="email" value="<?php echo $email ?>" autocomplete="false"/>
                </div>

                <div class="div-senha">
                    <h2> Senha: </h2>
                    <input id="txtSenha" type="text" name="senha" value="<?php echo $senha ?>" autocomplete="false"/>
                </div>

                <div class="div-cpf">
                    <h2> CPF: </h2>
                    <input id="txtCpf" type="text" name="cpf" value="<?php echo $cpf ?>" autocomplete="false"/>
                </div>

                <div class="div-aviso">
                    <p> *Para ter certeza das mudanças recarregue a página* </p>
                </div>

                <div class="div-btn">
                    <div class="div-btn-dentro">
                        <input type="submit" class="btnAtualizar" name="Mudar" value="Atualizar"/>
                        <a href="homeLogado" class="btnVoltar">
                              <span> Voltar </span>
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <?php
        include 'Templates/footer.php';
    ?>

    <!-- <button class="scrollTop" onclick="backTop();">
        <img src="App/Views/pages/img/botao-subir.png">
    </button> -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>

        
        window.addEventListener('scroll', function() {
        let scroll = document.querySelector('.scrollTop')
            scroll.classList.toggle('active', window.scrollY > 440)
        })

        function backTop(){
            window.scrollTo({
                top: 0,
                behavior: "smooth",
                transition: "all 2.5s"
            })
        }

        //Escolher imagem
        $("#escolher").change(function(){
            if($(this).val()){ // só se o input não estiver vazio
                var img = this.files[0]; // seleciona o arquivo do input
                var f = new FileReader(); // cria o objeto FileReader
                f.onload = function(e){ // ao carregar a imagem
                    $("#imagemPerfil").attr("src",e.target.result); // altera o src da imagem
                    // alert(this.files[0]);
                    sessionStorage.setItem('img', this.files[0]);
                    // alert(sessionStorage.getItem('img'));
                }
                f.readAsDataURL(img); // lê o arquivo
            }
        });

        //Arrastar e soltar

    </script>

</body>
</html>