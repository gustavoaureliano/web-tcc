<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="App/Views/pages/CSS/tiposPag.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="App/Views/pages/CSS/footer.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="App/Views/pages/CSS/menuLogado.css" media="screen" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <title> Pagamento - PIX </title>
</head>
<body>
    <?php
        session_start();

    // if(isset($_POST['nome']) && isset($_POST['numcart']) && isset($_POST['exp']) && isset($_POST['codseg'])){
    //     echo "<script> alert('O pagamento deu certo'); </script>";
    // }
    // else{
    //     echo "<script> alert('O pagamento não deu certo'); </script>";
    // }

    ?>

    <div class="caixa-logo-pag">
        <a href="homeLogado">
            <img src="App/Views/pages/img/LogoRoxa2.png">
        </a>
    </div>

    <div class="payment-title">
        <h1> Pagamento - PIX </h1>
    </div>

    <div class="div-grande-pix">
        <div class="div-chave-pix">
            <h1> Chave do PIX </h1>
            <div class="chave-pix">
                <p> bf965d-677c-49ff-b9da-5131da05f3 </p>
            </div>
        </div>
        <h2> Valor: R$<?php echo number_format($_SESSION['Total'],2,",","."); ?> </h2>
        <p class="aviso-p"> *Assim que pagar, clique em "Concluir"* </p> 
    </div>
    
    <div class="div-btn2">
       <input type="submit" class="btnComprar" name="comprar" value="Concluir">
       <a href="pagamentoLobby">
           <button class="btnVoltar"> Voltar </button>
       </a>
    </div>

    <script>
    </script>
</body>
</html>