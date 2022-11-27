<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="App/Views/pages/CSS/cupons-eventos.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="App/Views/pages/CSS/footer.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="App/Views/pages/CSS/menuLogado.css" media="screen" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <title> Meus Cupons </title>
</head>
<body>
    
    <?php
        include 'Templates/menuLogado.php';
    ?>
    
    <div class="main-tit"> 
            <h2> Aproveite Seus Cupons! </h2>
            <p> Clique no cupom, veja as vantagens e como conseguir  </p>
    </div>
        
    <div class="div-cupons-baixo">
        <div class="nivel1">
            <div class="nivel1-text">
                <h2 style="padding-top: 66px;"> Meus Cupons </h2>
            </div>
            <!--
            <div class="nivel1-todas-caixas">
                    <div class="caixa-frequencia">
                        <div class="img-cupom">
                            <img src="App/Views/pages/img/icone-cupom-volta1.png">
                        </div>
                        <div class="cupom-text">
                            <h3> CUPONS </h3>
                            <h1> RETORNO 1 </h1>
                            <p> Venha duas vezes ao parque eeea dawe </p>
                        </div>
                        <div class="cupom-bottom">
                            <div class="cupom-bottom-caixa">
                                <h2> Nível 1 </h2>
                            </div>
                            <div class="cupom-bottom-vantagem" id="1">
                                <h2> Clique Aqui </h2>
                            </div>
                        </div>
                    </div>

                    <div class="caixa-comida">
                        <div class="img-cupom">
                            <img src="App/Views/pages/img/icone-cupom-comida1.png">
                        </div>
                        <div class="cupom-text">
                            <h3> CUPONS </h3>
                            <h1> REFEIÇÃO 1 </h1>
                            <p> Venha duas vezes ao parque  ea ea ea </p>
                        </div>
                        <div class="cupom-bottom">
                            <div class="cupom-bottom-caixa">
                                <h2> Nível 1 </h2>
                            </div>
                            <div class="cupom-bottom-vantagem2" id="2">
                                <h2> Clique Aqui </h2>
                            </div>
                        </div>
                    </div>


                    <div class="caixa-vip">
                        <div class="img-cupom">
                            <img src="App/Views/pages/img/icone-pass-vip1.png">
                        </div>
                        <div class="cupom-text">
                            <h3> CUPONS </h3>
                            <h1> VIP 1 </h1>
                            <p> Venha duas vezes ao parque  ea ea ea </p>
                        </div>
                        <div class="cupom-bottom">
                            <div class="cupom-bottom-caixa">
                                <h2> Nível 1 </h2>
                            </div>
                            <div class="cupom-bottom-vantagem3" id="3">
                                <h2> Clique Aqui </h2>
                            </div>
                        </div>
                    </div>

                    <div class="caixa-vip">
                        <div class="img-cupom">
                            <img src="App/Views/pages/img/icone-cupom-volta2.png">
                        </div>
                        <div class="cupom-text">
                            <h3> CUPONS </h3>
                            <h1> RETORNO 2 </h1>
                            <p> Venha duas vezes ao parque  ea ea ea </p>
                        </div>
                        <div class="cupom-bottom">
                            <div class="cupom-bottom-caixa">
                                <h2> Nível 2 </h2>
                            </div>
                            <div class="cupom-bottom-vantagem4" id="4">
                                <h2> Clique Aqui </h2>
                            </div>
                        </div>
                    </div>

                    
                    <div class="caixa-vip">
                        <div class="img-cupom">
                            <img src="App/Views/pages/img/icone-cupom-comida2.png">
                        </div>
                        <div class="cupom-text">
                            <h3> CUPONS </h3>
                            <h1> REFEIÇÃO 2 </h1>
                            <p> Venha duas vezes ao parque  ea ea ea </p>
                        </div>
                        <div class="cupom-bottom">
                            <div class="cupom-bottom-caixa">
                                <h2> Nível 2 </h2>
                            </div>
                            <div class="cupom-bottom-vantagem5" id="5">
                                <h2> Clique Aqui </h2>
                            </div>
                        </div>
                    </div>

                    <div class="caixa-vip">
                        <div class="img-cupom">
                            <img src="App/Views/pages/img/icone-pass-vip2.png">
                        </div>
                        <div class="cupom-text">
                            <h3> CUPONS </h3>
                            <h1> VIP 2 </h1>
                            <p> Venha duas vezes ao parque  ea ea ea </p>
                        </div>
                        <div class="cupom-bottom">
                            <div class="cupom-bottom-caixa">
                                <h2> Nível 2 </h2>
                            </div>
                            <div class="cupom-bottom-vantagem6" id="6">
                                <h2> Clique Aqui </h2>
                            </div>
                        </div>
                    </div>

                    <div class="caixa-vip">
                        <div class="img-cupom">
                            <img src="App/Views/pages/img/icone-cupom-volta3.png">
                        </div>
                        <div class="cupom-text">
                            <h3> CUPONS </h3>
                            <h1> RETORNO 3 </h1>
                            <p> Venha duas vezes ao parque  ea ea ea </p>
                        </div>
                        <div class="cupom-bottom">
                            <div class="cupom-bottom-caixa">
                                <h2> Nível 3 </h2>
                            </div>
                            <div class="cupom-bottom-vantagem7" id="7">
                                <h2> Clique Aqui </h2>
                            </div>
                        </div>
                    </div>

                    <div class="caixa-vip">
                        <div class="img-cupom">
                            <img src="App/Views/pages/img/icone-pass-vip3.png">
                        </div>
                        <div class="cupom-text">
                            <h3> CUPONS </h3>
                            <h1> VIP 3 </h1>
                            <p> Venha duas vezes ao parque  ea ea ea </p>
                        </div>
                        <div class="cupom-bottom">
                            <div class="cupom-bottom-caixa">
                                <h2> Nível 3 </h2>
                            </div>
                            <div class="cupom-bottom-vantagem8" id="8">
                                <h2> Clique Aqui </h2>
                            </div>
                        </div>
                    </div>


                    <div class="caixa-vip">
                        <div class="img-cupom">
                            <img src="App/Views/pages/img/icone-cupom-comida3.png">
                        </div>
                        <div class="cupom-text">
                            <h3> CUPONS </h3>
                            <h1> REFEIÇÃO 3 </h1>
                            <p> Venha duas vezes ao parque  ea ea ea </p>
                        </div>
                        <div class="cupom-bottom">
                            <div class="cupom-bottom-caixa">
                                <h2> Nível 3 </h2>
                            </div>
                            <div class="cupom-bottom-vantagem9" id="9">
                                <h2> Clique Aqui </h2>
                            </div>
                        </div>
                    </div>

            </div>
        </div> -->

            <div class="nivel1-todas-caixas">


                <?php
                    // $_SESSION['cupons']
                    // echo "<pre>";
                    // var_dump($_SESSION['cupons']);
                    $cupons = $_SESSION['cupons'];

                    foreach ($cupons as $index => $cupom){

                        $img = $cupom['Foto'];
                        $source = '';

                        if (isset($img))
                        {
                            $img64 = base64_encode($img);
                            $source = "data:image/jpeg;base64, $img64";
                        } 
                        else {
                            $source = "App/Views/pages/img/sem-imagem.png";
                        }

                        // $img = $cupom['Foto'];
                        $nivel = '';

                        if ($cupom['idCupom'] == 5)
                        {
                            $nivel = 2;
                        } 
                        else {
                            $nivel = 1;                        
                        }
                        if($cupom['idCupom'] != 3) {
                            echo "
                            <div class='caixa-vip'>
                                <div class='img-cupom'>
                                    <img src='$source'>
                                </div>
                                <div class='cupom-text'>
                                    <h3> CUPONS </h3>
                                    <h1> {$cupom['Nome']} </h1>
                                    <p> {$cupom['Descricao']} </p>
                                </div>
                                <div class='cupom-bottom'>
                                    <div class='cupom-bottom-caixa'>
                                        <h2> Nível $nivel </h2>
                                    </div>
                                    <div class='cupom-bottom-vantagem{$cupom['idCupom']}' id='{$cupom['idCupom']}'>
                                        <h2> Clique Aqui </h2>
                                    </div>
                                </div>
                            </div>";
                        }
                    }
                ?>
            </div>
        </div>
    </div>

    <div class="popup-wrapper">
        <div class="popup">
            <div class="popup-close">
                <img class="popup-close-img" src="App/Views/pages/img/simbolo-x.png" >
            </div>

            <div class="popup-content">
                <h2 class="popup-tit">  </h2>
                <div class="popup-content-text">
                    <p class="popup-content-text-p"> 
                          
                    </p>
                </div>
                <a class="popup-link"> Ok </a>
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


        // const vantagem = document.querySelector('.cupom-bottom-vantagem');
        // const popup = document.querySelector('.popup-wrapper')
        // const closeImg = document.querySelector('.popup-close-img')
        // const tit = document.querySelector('.popup-tit')
        
        // vantagem.addEventListener('click', () => {
        //     popup.style.display = "block";
        // })

        // vantagem.addEventListener('click', event => {
        //     popup.style.display = "block";
        //     const idElement = event.target.id;
        //     tit.innerHTML = "OI eiookino";
        // })

        // popup.addEventListener('click', event => {
        //     const classNameOfClickedElement = event.target.classList[0];
        //     const classNames = ['popup-close-img', 'popup-wrapper', 'popup-link'];
        //     const shouldClosePopup = classNames.some(className => className === classNameOfClickedElement);

        //     if (shouldClosePopup){
        //         popup.style.display = 'none';
        //     }
        // })

        // const imagem = document.querySelector('.img-link');
        // const popup = document.querySelector('.popup-wrapper')
        // const closeImg = document.querySelector('.popup-close-img')
        // const tit = document.querySelector('.popup-tit')
        
        // var el = document.getElementById('.cupom-bottom-vantagem');
        // el.addEventListener('click', function(e) {
        //     alert(e.target.id);
        // });

        // vantagem.addEventListener('click', event => {
        //     popup.style.display = "block";
        //     // const idElement = event.target.id;
        //     const idElement = document.getElementById(event.target);
        //     console.log(idElement);
            
        //     if (event.target.document.getElementById("9")) {
        //         popup-tit.innerHTML = "vip1";
        //          popup-content-text.innerHTML = "oi beleza, é nois, teste tese,eaoq epakdwo tomy";
        //     }
        // })

        // popup.addEventListener('click', event => {
        //     const classNameOfClickedElement = event.target.classList[0];
        //     const classNames = ['popup-close-img', 'popup-wrapper', 'popup-link'];
        //     const shouldClosePopup = classNames.some(className => className === classNameOfClickedElement);

        //     if (shouldClosePopup){
        //         popup.style.display = 'none';
        //     }
        // })
        //alert("Oi");

        const vantagem = document.querySelector('.cupom-bottom-vantagem4');
        const popup = document.querySelector('.popup-wrapper');
        const closeImg = document.querySelector('.popup-close-img');
        const tit = document.querySelector('.popup-tit');
        const text = document.querySelector('.popup-content-text-p');

        var el = document.getElementById('4');
        if (el != null){
            el.addEventListener('click', function(e) {

                vantagem.addEventListener('click', event => {
                    popup.style.display = "block";
                    // const idElement = event.target.id;
                    const idElement = document.getElementById(event.target);

                    tit.innerHTML = "RETORNO 1";
                    text.innerHTML = "Prêmio: 20% de desconto em uma compra";
                });

                popup.addEventListener('click', event => {
                    const classNameOfClickedElement = event.target.classList[0];
                    const classNames = ['popup-close-img', 'popup-wrapper', 'popup-link'];
                    const shouldClosePopup = classNames.some(className => className === classNameOfClickedElement);

                    if (shouldClosePopup){
                        popup.style.display = 'none';
                    }
                })
            });
        }


        const vantagem2 = document.querySelector('.cupom-bottom-vantagem5');
        var el2 = document.getElementById('5');

        if (el2 != null){
            el2.addEventListener('click', function(e) {

                vantagem2.addEventListener('click', event => {
                    popup.style.display = "block";
                    // const idElement = event.target.id;
                    const idElement = document.getElementById(event.target);

                    tit.innerHTML = "RETORNO 2";
                    text.innerHTML = "Prêmio: 30% de desconto em uma compra";
                });

                popup.addEventListener('click', event => {
                    const classNameOfClickedElement = event.target.classList[0];
                    const classNames = ['popup-close-img', 'popup-wrapper', 'popup-link'];
                    const shouldClosePopup = classNames.some(className => className === classNameOfClickedElement);

                    if (shouldClosePopup){
                        popup.style.display = 'none';
                    }
                })
            });
        }

        const vantagem3 = document.querySelector('.cupom-bottom-vantagem6');
        var el3 = document.getElementById('6');

        if (el3 != null){
            el3.addEventListener('click', function(e) {

                vantagem3.addEventListener('click', event => {
                    popup.style.display = "block";
                    // const idElement = event.target.id;
                    const idElement = document.getElementById(event.target);

                    tit.innerHTML = "VIP 1";
                    text.innerHTML = "Apresente no parque, ganhe uma camisa e uma fila especial";  
                });

                popup.addEventListener('click', event => {
                    const classNameOfClickedElement = event.target.classList[0];
                    const classNames = ['popup-close-img', 'popup-wrapper', 'popup-link'];
                    const shouldClosePopup = classNames.some(className => className === classNameOfClickedElement);

                    if (shouldClosePopup){
                        popup.style.display = 'none';
                    }
                })
            });
      }

    </script>
</body>
</html>