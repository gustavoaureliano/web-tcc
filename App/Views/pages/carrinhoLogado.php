<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="App/Views/pages/CSS/carrinho.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="App/Views/pages/CSS/footer.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="App/Views/pages/CSS/menuLogado.css" media="screen" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <title> Carrinho </title>
</head>
<body>
    <?php
        include 'Templates/menuLogado.php';
    ?>

    <div class="divgrande">
        <div class="div-esquerda">
            <div class="aviso-login">
                <div class="caixa-aviso-login">
                    <h2> Garanta seus ingressos e aproveite! </h2>
                </div>
            </div>

            <section class="caixa-grande">
                <!-- <div class="caixa-itens">
                    <div class="caixa-itens-imagem">
                        <div class="caixa-itens-img">
                            <img src="App/Views/pages/img/gato1.jpg">
                        </div>
                    </div>
                    <div class="caixa-itens-info">
                        <div class="caixa-itens-tit"> 
                            Produto
                        </div>
                        <div class="caixa-itens-valor">
                            <div class="itens-valor">
                                1234
                            </div>
                        </div>

                        <div class="caixa-itens-tit2"> 
                            Preço
                        </div>
                        <div class="caixa-itens-valor2">
                            <div class="itens-valor">
                                1234
                            </div>
                        </div>

                        <div class="caixa-itens-tit3"> 
                            Quantidade
                        </div>
                        <div class="caixa-itens-valor3">
                            <div class="itens-valor-quant">
                                <div class="itens-valor-menos" onclick='diminuir()'> 
                                    <img src="App/Views/pages/img/menos2.png">
                                </div>
                                <div class="itens-valor-value"> 
                                    <p id="value">  <p>
                                </div>
                                <div class="itens-valor-mais" onclick='aumentar()'> 
                                    <img id="btnAdicionar" src="App/Views/pages/img/mais2.png">
                                </div>
                            </div>
                        </div>

                        <div class="caixa-itens-lixo"> 
                            <img src="App/Views/pages/img/lixo3.png">
                        </div>

                    </div>
                </div> -->

                <?php
                    // var_dump(count($_SESSION['carrinho']));
                    if (isset($_SESSION['carrinho']) && count($_SESSION['carrinho']) > 0){

                      $carrinho = $_SESSION['carrinho'];
                    //   echo "<pre>";
                    //   var_dump($carrinho);

                      foreach ($carrinho as $index => $item){
                        // var_dump($item->getQuantidade());
                        // echo "<pre>";
                        // var_dump($item);
                        // echo "</pre>";
                        // echo $item->getProdNome(); como assim
                        $img = $item->getFoto();
                        $source = '';

                        if (isset($img))
                        {
                            $img64 = base64_encode($img);
                            $source = "data:image/jpeg;base64, $img64";
                        } 
                        else {
                            $source = "App/Views/pages/img/sem-imagem.png";
                        }

                        echo 
                        "
                        <div class='caixa-itens'>
                            <div class='caixa-itens-imagem'>
                                <div class='caixa-itens-img'>
                                    <img src='$source'>
                                </div>
                            </div>
                            <div class='caixa-itens-info'>
                                <div class='caixa-itens-tit'> 
                                    Produto
                                </div>
                                <div class='caixa-itens-valor'>
                                    <div class='itens-nome'>
                                        {$item->getProdNome()}
                                    </div>
                                </div>

                                <div class='caixa-itens-tit2'> 
                                    Preço
                                </div>
                                <div class='caixa-itens-valor2'>
                                    <div class='itens-valor'>
                                        {$item->getPreco()}
                                    </div>
                                </div>

                                <div class='caixa-itens-tit3'> 
                                    Quantidade
                                </div>
                                <div class='caixa-itens-valor3'>
                                    <div class='itens-valor-quant'>
                                            <div class='itens-valor-menos'>
                                                <img class='btnDiminuir' src='App/Views/pages/img/menos2.png'>
                                            </div>
                                            <div class='itens-valor-value'>
                                                <p class='value'> 1 <p>
                                            </div>
                                            <div class='itens-valor-mais'>
                                                <img class='btnAdicionar' src='App/Views/pages/img/mais2.png'>
                                            </div>
                                    </div>
                                </div>

                                <div class='caixa-itens-lixo'> 
                                    <form class='formLixo'>
                                        <input type='hidden' name='acao' value='deletar'>
                                        <input type='hidden' name='index' value='$index'>
                                        <img class='lixo' src='App/Views/pages/img/lixo3.png'>
                                    </form>
                                </div>

                            </div>
                        </div>
                        ";
                      }
                    } else{
                        echo "<p class='carrinho-vazio'> Carrinho Vazio </p>";
                    }
                ?>
                

            </section>
        </div>
        <div class="div-direita">
            <div class="caixa-total">
                <h1> Total Da Compra </h1>
                <div class="caixa-total-total">
                    <div class="parte-text"> 
                        <p> Total: </p>
                    </div>
                    <div class="parte-value"> 
                        <p class="value-total"> R$ </p>
                    </div>
                </div>
                <div class="caixa-total-subtotal"> 
                    <div class="parte-text"> 
                        <p> Subtotal: </p>
                    </div>
                    <div class="parte-value"> 
                        <p class="value-subtotal"> R$ </p>
                    </div>
                </div>
                <div class="caixa-cupom">
                    <!-- <input class="cupom-logado" type="text" name="textbox"> -->
                    <form>
                        <select class="selectCupom" name="cupom">
                            <?php
                                $cupons = $_SESSION['cupons'];

                                foreach ($cupons as $index => $cupom){
                                    echo "<option value='{$cupom['idCupom']}'> {$cupom['Nome']} </option>";
                                }
                            ?>
                        </select>
                        <input type="hidden" name="acao" value="verificarCupom">
                        <button type="submit" value="Submit"> Aplicar Cupom </button>
                    </form>
                </div>
            </div>

            <section class="caixa-metodo-pag">
                <h2> Métodos de pagamento </h2>
                <div class="caixa-logos">
                    <div class="caixa">
                        <img src="App/Views/pages/img/logo1-pag.png">
                    </div>
                    <div class="caixa">
                        <img src="App/Views/pages/img/logo2-pag.png">
                    </div>
                    <div class="caixa">
                        <img src="App/Views/pages/img/logo3-pag.png">
                    </div>
                    <div class="caixa">
                        <img src="App/Views/pages/img/logo4-pag.svg">
                    </div>
                    <div class="caixa">
                        <img src="App/Views/pages/img/logo5-pag.png">
                    </div>
                </div>
                <div class="caixa-logos2">
                    <div class="caixa">
                        <img src="App/Views/pages/img/logo1-pag2.png">
                    </div>
                    <div class="caixa">
                        <img src="App/Views/pages/img/logo2-pag2.png">
                    </div>
                    <div class="caixa">
                        <img src="App/Views/pages/img/logo3-pag2.png">
                    </div>
                    <div class="caixa">
                        <img src="App/Views/pages/img/logo4-pag2.png">
                    </div>
                    <div class="caixa">
                        <img src="App/Views/pages/img/logo5-pag2.png">
                    </div>
                </div>
            </section>

            <div class="caixa-btn-finalizar">
                <div class="btn-finalizar">
                    <form>
                        <input id="idTotal" type="hidden" name="total">
                        <input type="hidden" name="acao" value="redirecionar">
                        <button type="submit" value="Submit"> Finalizar a Compra </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php
        include 'Templates/footer.php';
    ?>

    <button class="scrollTop" onclick="backTop();">
        <img src="App/Views/pages/img/botao-subir.png">
    </button>


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

        // Contador
        // document.getElementById("value2").innerHTML = count;
        // var aumentar = document.getElementById("btnSoma");
        // var diminuir = document.getElementById("btnSubt");

        // var count = 0;
        // document.getElementById("value").innerHTML = count;

        // function aumentar() {
            // count++;
            // document.getElementById("value").innerHTML = count;
            // document.getElementById("formAumentar").innerHTML = count;
        // }

        // function diminuir(){
            // count--;
            // if (count < 0){
                // count = 0;
            // }
            // document.getElementById("value").innerHTML = count;
        // }

        // var count2 = 0;
        // var aumentar = document.getElementById("btnSoma");
        // var diminuir = document.getElementById("btnSubt");

        let quantidades = document.querySelectorAll('.caixa-itens .value');
        let btnsAumentar = document.querySelectorAll('.caixa-itens .btnAdicionar');
        let btnsDiminuir = document.querySelectorAll('.caixa-itens .btnDiminuir');
        let lixos = document.querySelectorAll('.caixa-itens .lixo');
        let formsLixo = document.querySelectorAll('.caixa-itens .formLixo');

        let tamanho = quantidades.length;

        function atualizarTotal() {
            // console.log('oi');
            let total = document.querySelector('.parte-value .value-total');
            let subTotal = document.querySelector('.parte-value .value-subtotal');
            let inputTotal = document.querySelector('#idTotal');
            let resultado = 0;
            let preco = 0;
            let precos = [];
            let desconto = 0;
            

            <?php
                $carrinho = $_SESSION['carrinho'];
                // $a = 'ap';
                // echo "console.log('$carrinhoPreco')";

                foreach ($carrinho as $index => $item){
                    echo 
                    " 
                        preco = {$item->getPreco()};
                        precos.push(preco);
                    ";
                }
                
                if (isset($_SESSION['cupom'])){
                    $cupom = $_SESSION['cupom'];
                    $desconto = $cupom['Desconto'];
                    echo "desconto = {$desconto};";
                }
            ?>
            
            for(k = 0; k < precos.length; k++){
                let quant = parseInt(quantidades[k].innerText);
                // console.log(quant);
                resultado += precos[k] * quant;
            }

            total.innerText = 'R$' + (resultado - (desconto/100 * resultado));
            subTotal.innerText = 'R$' + resultado;
            // console.log(resultado);

            inputTotal.value = (resultado - (desconto/100 * resultado));

        }

        for (i = 0; i < tamanho; i++) {
            let quantidade = quantidades[i];
            let btnAumentar = btnsAumentar[i];
            let btnDiminuir = btnsDiminuir[i];
            let lixo = lixos[i];
            let formLixo = formsLixo[i];

            let count = 1;

            btnAumentar.addEventListener('click', () => {
                count++;
                quantidade.innerText = count;
                atualizarTotal();
            });

            btnDiminuir.addEventListener('click', () => {
                count--;
                if (count < 1){
                    count = 1;
                }
                quantidade.innerText = count;
                atualizarTotal();
            });

            lixo.addEventListener('click', () => {
                formLixo.submit(); 
            });

            // sessionStorage.setItem('img', count);

        };

        atualizarTotal();
    </script>
</body>
</html>