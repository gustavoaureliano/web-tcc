<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="App/Views/pages/CSS/cupons-eventos.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="App/Views/pages/CSS/footer.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="App/Views/pages/CSS/menu.css" media="screen" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <title> Eventos </title>
</head>
<body>
    <?php
        include 'Templates/menu.php';
    ?>
    
    <div class="div-imagem-principal">
        <img src="App/Views/pages/img/eventos-imagem-princ.jpg">
        <div class="caixa-principal-text">
            <h2> EVENTOS </h2>
            <p> Exclusivos, divertidos e imperdíveis </p>
        </div>
    </div>

    <div class="efeito-abaixa">
        <a href="#sec2">
                <div class="scroll-down"> </div>
        </a>
    </div>
    
    <div id="sec2" class="prog-eventos">
        <div class="caixa-grande-prog">
            <div class="caixa-prog-tit">
                <h3> Programação dos Eventos </h3>
            </div>
            <div class="caixas-prog">
                <div class="caixa-prog">
                    <h2> Mês de Outubro </h2>
                    <div class="caixa-prog-img">
                        <img src="App/Views/pages/img/dua-lipa-eventos.jpg">
                    </div>
                    <div class="caixa-prog-text">
                        <span> EVENTOS </span>
                        <h4> 07/10 </h4>
                        <h2> <img src="App/Views/pages/img/ingresso-evento.png"> Dua Lipa <img src="App/Views/pages/img/ingresso-evento.png"> </h2>
                        <h5> R$110 </h5>
                        <p> Show de uma das melhores cantoras da atualidade! </p>
                        <button class="btnAdicionar" onClick="clickButton()"> Adicionar ao Carrinho </button>
                    </div>
                </div>

                <div class="caixa-prog">
                    <h2> Mês de Novembro </h2>
                    <div class="caixa-prog-img">
                        <img src="App/Views/pages/img/coldplay-eventos.jpg">
                    </div>
                    <div class="caixa-prog-text">
                        <span> EVENTOS </span>
                        <h4> 16/11 </h4>
                        <h2> <img src="App/Views/pages/img/ingresso-evento.png"> Coldplay <img src="App/Views/pages/img/ingresso-evento.png"> </h2>
                        <h5> R$140 </h5>
                        <p>  Show de uma das maiores bandas de rock, com vários hits clássicos! </p>
                        <button class="btnAdicionar" onClick="clickButton()"> Adicionar ao Carrinho </button>
                    </div>
                </div>
            
                <div class="caixa-prog">
                    <h2> Mês de Novembro </h2>
                    <div class="caixa-prog-img">
                        <img src="App/Views/pages/img/harry-styles-eventos.jpg">
                    </div>
                    <div class="caixa-prog-text">
                        <span> EVENTOS </span>
                        <h4> 28/11 </h4>
                        <h2> <img src="App/Views/pages/img/ingresso-evento.png"> Harry Styles <img src="App/Views/pages/img/ingresso-evento.png"> </h2>
                        <h5> R$100 </h5>
                        <p> Show do Cantor de vários hit estourados, ex-membro do One Direction! </p>
                        <button class="btnAdicionar" onClick="clickButton()"> Adicionar ao Carrinho </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="como-funciona">
        <div class="caixa-efeito-text">
            <p> Compre Seu Ingresso, Diversão <span class="typed-text"></span><span class="cursor">&nbsp;</span>!</p>
        </div>
        
    </div>
    
    <!-- <div class="efeito-bottom">
        confete  confete  confete  confete  confete
    </div> -->
    <div class="div-btnConfetti">
        <button id="confetti">
            <img src="App/Views/pages/img/confetti.png">
        </button>
    </div>

    <?php
        include 'Templates/footer.php';
    ?>

    <button class="scrollTop" onclick="backTop();">
        <img src="App/Views/pages/img/botao-subir.png">
    </button>

    <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@0.0.3/dist/confetti.browser.min.js"> </script>
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

        // Efeito text

        const typedTextSpan = document.querySelector(".typed-text");
        const cursorSpan = document.querySelector(".cursor");

        const textArray = ["DE SOBRA", "GARANTIDA"];
        const typingDelay = 200;
        const erasingDelay = 100;
        const newTextDelay = 2000; // Delay between current and next text
        let textArrayIndex = 0;
        let charIndex = 0;

        function type() {
        if (charIndex < textArray[textArrayIndex].length) {
            if(!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
            typedTextSpan.textContent += textArray[textArrayIndex].charAt(charIndex);
            charIndex++;
            setTimeout(type, typingDelay);
        } 
        else {
            cursorSpan.classList.remove("typing");
            setTimeout(erase, newTextDelay);
        }
        }

        function erase() {
            if (charIndex > 0) {
            if(!cursorSpan.classList.contains("typing")) cursorSpan.classList.add("typing");
            typedTextSpan.textContent = textArray[textArrayIndex].substring(0, charIndex-1);
            charIndex--;
            setTimeout(erase, erasingDelay);
        } 
        else {
            cursorSpan.classList.remove("typing");
            textArrayIndex++;
            if(textArrayIndex>=textArray.length) textArrayIndex=0;
            setTimeout(type, typingDelay + 1100);
        }
        }

        document.addEventListener("DOMContentLoaded", function() { // On DOM Load initiate the effect
        if(textArray.length) setTimeout(type, newTextDelay + 250);
        });


        // Confetti
        document.getElementById("confetti").addEventListener('click', function(){

        confetti({
            particleCount: 100,
            spread: 70,
            origin: {
                y: 0.6
            }
        });
        });
    </script>
</body>
</html>