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
    <title> Pagamento - Boleto </title>
</head>
<body>
    <?php

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
        <h1> Pagamento - Boleto </h1>
    </div>

    <div class="div-grande-cartao">
        <div class="div-boleto">
            <?php
                session_start();
                $total = $_SESSION['Total'];

                $cliente = $_SESSION['cliente'];
                $nome = $cliente['Nome'];
                $cpf = $cliente['CPF'];

                require 'autoloader.php';

                use OpenBoleto\Banco\Bradesco;
                use OpenBoleto\Agente;

                $sacado = new Agente($nome, $cpf, '', '72000-000', 'São Paulo', 'SP');
                $cedente = new Agente('ETESP Universe', '02.123.123/0001-11', 'CLS 403 Lj 23', '71000-000', 'São Paulo', 'SP');

                $boleto = new Bradesco(array(
                    // Parâmetros obrigatórios
                    'dataVencimento' => new DateTime('2023-01-01'),
                    'valor' => $total,
                    'sequencial' => 123456789, // Até 11 dígitos
                    'sacado' => $sacado,
                    'cedente' => $cedente,
                    'agencia' => 1172, // Até 4 dígitos
                    'carteira' => 6, // 3, 6 ou 9
                    'conta' => 0403005, // Até 7 dígitos

                    // Parâmetros recomendáveis
                    //'logoPath' => 'http://empresa.com.br/logo.jpg', // Logo da sua empresa
                    'contaDv' => 2,
                    'agenciaDv' => 1,
                    'carteiraDv' => 1,
                    'descricaoDemonstrativo' => array( // Até 5
                        'Compra de materiais cosméticos',
                        'Compra de alicate',
                    ),
                    'instrucoes' => array( // Até 8
                        'Após o dia 30/11 cobrar 2% de mora e 1% de juros ao dia.',
                        'Não receber após o vencimento.',
                    ),

                    // Parâmetros opcionais
                    //'resourcePath' => '../resources',
                    //'cip' => '000', // Apenas para o Bradesco
                    //'moeda' => Bradesco::MOEDA_REAL,
                    //'dataDocumento' => new DateTime(),
                    //'dataProcessamento' => new DateTime(),
                    //'contraApresentacao' => true,
                    //'pagamentoMinimo' => 23.00,
                    //'aceite' => 'N',
                    //'especieDoc' => 'ABC',
                    //'numeroDocumento' => '123.456.789',
                    //'usoBanco' => 'Uso banco',
                    //'layout' => 'layout.phtml',
                    //'logoPath' => 'http://boletophp.com.br/img/opensource-55x48-t.png',
                    //'sacadorAvalista' => new Agente('Antônio da Silva', '02.123.123/0001-11'),
                    //'descontosAbatimentos' => 123.12,
                    //'moraMulta' => 123.12,
                    //'outrasDeducoes' => 123.12,
                    //'outrosAcrescimos' => 123.12,
                    //'valorCobrado' => 123.12,
                    //'valorUnitario' => 123.12,
                    //'quantidade' => 1,
                ));

                echo $boleto->getOutput();
            ?>
        </div>
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