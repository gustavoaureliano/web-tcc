<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="App/Views/pages/CSS/carrinho.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="App/Views/pages/CSS/footer.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="App/Views/pages/CSS/menu.css" media="screen" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <title> Carrinho </title>
</head>
<body>
    <?php
        include 'Templates/menu.php';
    ?>

    <div class="divgrande">
        <div class="div-esquerda">
            <div class="aviso-login">
                <div class="caixa-aviso-login">
                    <h2> Para Poder Comprar Faça seu Login! </h2>
                </div>
            </div>

            <section class="caixa-grande">
                <!--<div class="caixa-itens">
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
                                <div class="itens-valor-menos" onclick='diminuir2()'> 
                                    <img id="btnSubt" src="App/Views/pages/img/menos2.png">
                                </div>
                                <div class="itens-valor-value"> 
                                    <p id="value2">  <p>
                                </div>
                                <div class="itens-valor-mais" onclick='aumentar2()'> 
                                    <img id="btnSoma" src="App/Views/pages/img/mais2.png">
                                </div>
                            </div>
                        </div>

                        <div class="caixa-itens-lixo"> 
                            <img src="App/Views/pages/img/lixo3.png">
                        </div>

                    </div>
                </div> -->

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
                        <p> R$ </p>
                    </div>
                </div>
                <div class="caixa-total-subtotal"> 
                    <div class="parte-text"> 
                        <p> Subtotal: </p>
                    </div>
                    <div class="parte-value"> 
                        <p> R$ </p>
                    </div>
                </div>
                <div class="caixa-cupom">
                    <select class="selectCupom" name="cupom">
                          <option value='1'> SEM CUPOM </option>
                    </select>
                    <button type="submit" value="Submit"> Aplicar Cupom </button>
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
                    <a onclick="alert('Faça Login')">
                        <button type="submit" value="Submit"> Finalizar a Compra </button>
                    </a>
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
        var count = 0;
        document.getElementById("value").innerHTML = count;
        document.getElementById("value2").innerHTML = count;
        // var aumentar = document.getElementById("btnSoma");
        // var diminuir = document.getElementById("btnSubt");

        function aumentar() {
            count++;
            console.log(count);
            document.getElementById("value").innerHTML = count;
        }

        function diminuir(){
            count--;
            if (count < 0){
                count = 0;
            }
            document.getElementById("value").innerHTML = count;
        }

        var count2 = 0;
        // var aumentar = document.getElementById("btnSoma");
        // var diminuir = document.getElementById("btnSubt");

        function aumentar2() {
            count2++;
            document.getElementById("value2").innerHTML = count2;

        }

        function diminuir2(){
            count2--;
            if (count2 < 0){
                count2 = 0;
            }
            document.getElementById("value2").innerHTML = count2;
        }
    </script>
</body>
</html>