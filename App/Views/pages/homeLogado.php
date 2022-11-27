<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="App/Views/pages/CSS/estilo.css" rel="stylesheet" type="text/css">
    <link href="App/Views/pages/CSS/footer.css" rel="stylesheet" type="text/css">
    <link href="App/Views/pages/CSS/menuLogado.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <title> Home </title>
</head>
<body>
    
    <?php
        include 'Templates/menuLogado.php';
    ?>

    <section class="carousel">

        <div class="slides">
            <input type="radio" name="radio-btn" id="radio1">
            <input type="radio" name="radio-btn" id="radio2">
            <input type="radio" name="radio-btn" id="radio3">
            <input type="radio" name="radio-btn" id="radio4">

            <div class="slide first">
                <img src="App/Views/pages/img/carousel-montanha-russa.png" />
            </div>
            <div class="slide">
                <img src="App/Views/pages/img/Carrossel2.png" />
            </div>
            <div class="slide">
                <img src="App/Views/pages/img/Carrousel-tres.png" />
            </div>
            <div class="slide">
                <img src="App/Views/pages/img/Carossel4.jpg" />
            </div>

            <div class="navigation-auto">
                <div class="auto-btn1"></div>
                <div class="auto-btn2"></div>
                <div class="auto-btn3"></div>
                <div class="auto-btn4"></div>
            </div>

            <div class="previous" onclick="prev()">
                <img src="App/Views/pages/img/seta-esquerda.png" />
            </div>

            <div class="next" onclick="next()">
                <img src="App/Views/pages/img/seta-direita.png" />
            </div>
        </div>

        <div class="manual-navigation">
            <label for="radio1" class="manual-btn"> </label>
            <label for="radio2" class="manual-btn"> </label>
            <label for="radio3" class="manual-btn"> </label>
            <label for="radio4" class="manual-btn"> </label>
        </div>
    </section>

        <div class="div-noticias">
            <section class="noticias-grid" id="1">

                <div class="noticia1">
                    <div class="zoom">
                        <img style="object-position: top 20px" src="App/Views/pages/img/novidade-home.jpg" alt="">
                        <div class='text-item1'>
                            <p> Novidades no Parque </p>
                        </div>
                    </div>
                </div>
                <div class="noticia2" id="2">
                    <div class="zoom-grande">
                        <img src="App/Views/pages/img/atracoes-mais-home2.jpg" alt="">
                        <p class="text-item2"> Atrações mais Visitadas </p>
                    </div>
                </div>
                <div class="noticia3" id="3">
                    <div class="zoom">
                        <img src="App/Views/pages/img/comida-home.jpg" alt="">
                        <p class="text-item3"> Comidas no Parque </p>
                    </div>
                </div>
                <div class="noticia4" id="4">
                    <div class="zoom">
                        <img src="App/Views/pages/img/img-show-home2.jpg" alt="">
                        <p class="text-item3"> Eventos Novos </p>
                    </div>
                </div>
                <div class="noticia5" id="5">
                    <div class="zoom">
                        <img src="App/Views/pages/img/curiosidade-home.png" alt="">
                        <p class="text-item3"> Curiosidades </p>
                    </div>
                </div>
                <div class="noticia6" id="6">
                    <div class="zoom">
                        <img src="App/Views/pages/img/etesp-home.jpg" alt="">
                        <p class="text-item3"> ETESP </p>
                    </div>
                </div>
            </section>
        </div>

        <div class="div-efeito-tit">
            <h1 class="efeito-tit"> Aproveite o Parque, adquira já seu ingresso </h1>
        </div>

        <div class="ingressos">
            <h2> INGRESSOS </h2>
            <div class="quadrados">
                <div class="square">
                    <h3> Dia de Semana </h3>
                    <div class="square-img"> 
                        <img src="App/Views/pages/img/card-img1.jpg"> 
                    </div>
                    <div class="square-value">
                        <h1> INGRESSO </h1>
                        <span> R$ 110 </span>
                        <p> Parcelas em até 4x </p>
                    </div>
                    <a href="ingressos">
                        <button class="square-ver-mais"> Ver mais </button>
                    </a>
                </div>

                <div class="square-principal">
                    <h3> Final de Semana </h3>
                    <div class="square-img"> 
                        <img src="App/Views/pages/img/card-img2.jpg"> 
                    </div>
                    <div class="square-value">
                        <h1> INGRESSO </h1>
                        <span> R$ 90 </span>
                        <p> Parcelas em até 6x </p>
                    </div>
                    <a href="ingressos">
                        <button class="square-ver-mais"> Ver mais </button>
                    </a>
                </div>

                <div class="square">
                    <h3> Dia de Evento </h3>
                    <div class="square-img"> 
                        <img src="App/Views/pages/img/card-img3.jpg">
                    </div>
                    <div class="square-value">
                        <h1> INGRESSO </h1>
                        <span> R$ 130 </span>
                        <p> Parcelas em até 3x </p>
                    </div>
                    <a href="ingressos">
                        <button class="square-ver-mais"> Ver mais </button>
                    </a>
                </div>
            </div>
        </div>
        <div class="content-grande">
        <div class="content1">
            <div class="content1-img">
                <img src="App/Views/pages/img/eventos-home.jpg">
            </div>

            <div class="content1-text">
                <div class="content1-text-tit">
                    <div class="content1-text-tit-tit">
                        <h2> Eventos inéditos com renomados artistas </h2>
                    </div>
                    <div class="content1-text-tit-icon">
                        <img src="App/Views/pages/img/guitarra-home.png">
                    </div>
                </div>
                <div class="text">
                    <p> Após muitos pedidos, agora temos shows com artistas do momento, não deixe de ver seus ídolos.
                        Oferecemos uma excelente estrutura, montada especialmente para receber pessoas como você, oportunidade única.
                        Fique tranquilo quanto as comidas e as bebidas, já pensamos nisso e disponibilizamos uma estrutura perto do palco para sua melhor experiencia. 
                        Veja a programação e garanta seu passe!
                    </p>
                </div>
                <div class="btn-content">
                    <a href="eventos">
                        <button class="btn-content-text"> Confira Já </button>
                    </a>
                </div>
            </div>
        </div>

        <div class="content2">
            <div class="content2-text">
                <div class="content2-text-tit">
                    <div class="content2-text-tit-tit">
                        <h2> Nosso Parque aceita cupons, consiga o seu e economize </h2>
                    </div>
                    <div class="content2-text-tit-icon">
                        <img src="App/Views/pages/img/cupom-home.png">
                    </div>
                </div>
                <div class="text">
                    <p> O sistema de cupons possibilita ganhar benefícios e descontos, basta você 
                        cumprir o que cada cupom tem como requisito. Exclusivo para nossos visitantes, foi pensado para aumentar
                        ampliar a interação com a parque, além de incentivar um espírito competitivo.
                        Incluindo todos na brincadeira, na qual todos podem conseguir vantagens.
                        Bora pro parque! </p>
                </div>
                <div class="btn-content">
                    <a href="cupons">
                        <button class="btn-content-text"> Saiba mais </button>
                    </a>
                </div>
            </div>
            <div class="content2-img">
                <img src="App/Views/pages/img/cupons-home.jpg">
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
                <a class="popup-link"> Fechar </a>
            </div>
        </div>
    </div>

    <?php
        include 'Templates/footer.php';
    ?>

    <button class="scrollTop" onclick="backTop();">
        <img src="App/Views/pages/img/botao-subir.png">
    </button>
    <script type="text/javascript">
        
        window.addEventListener('scroll', function() {
        let scroll = document.querySelector('.scrollTop')
            scroll.classList.toggle('active', window.scrollY > 440)
        })
            
            function typeWriter(elemento) {
            const textoArray = elemento.innerHTML.split('');
            elemento.innerHTML = '';

            textoArray.forEach((letra, i) => {
                setTimeout(() =>
                    elemento.innerHTML += letra, 135 * i);
            });
        }

        const titulo = document.querySelector('.efeito-tit');
        setInterval(function () {
            typeWriter(titulo);
        }, 10000)


        let count = 1;
        document.getElementById("radio1").checked = true;

        function prev() {
            count--;
            if (count < 1) {
                count = 4;
            }

            document.getElementById("radio" + count).checked = true;
        }

        function next() {
            count++;
            if (count > 4) {
                count = 1;
            }

            document.getElementById("radio" + count).checked = true;
        }

        window.addEventListener('scroll', function () {
            let scroll = document.querySelector('.scrollTop')
            scroll.classList.toggle('active', window.scrollY > 440)
        })

        function backTop() {
            window.scrollTo({
                top: 0,
                behavior: "smooth",
                transition: "all 2s"
            })
        }

        function typeWriter(elemento) {
            const textoArray = elemento.innerHTML.split('');
            elemento.innerHTML = '';

            textoArray.forEach((letra, i) => {
                setTimeout(() =>
                    elemento.innerHTML += letra, 135 * i);
            });
        }
        
        // Pop-up
        const vantagem = document.querySelector('.noticia1');
        const popup = document.querySelector('.popup-wrapper');
        const closeImg = document.querySelector('.popup-close-img');
        const tit = document.querySelector('.popup-tit');
        const text = document.querySelector('.popup-content-text-p');

        var el = document.getElementById('1');

        el.addEventListener('click', function(e) {

            vantagem.addEventListener('click', event => {
                popup.style.display = "block";
                // const idElement = event.target.id;
                const idElement = document.getElementById(event.target);

                tit.innerHTML = "<h1> Novidades no Parque </h1>";
                text.innerHTML = "<h4> 12 de novembro 2022 </h4> <img class='img-popup' src='App/Views/pages/img/novidade-home.jpg'> <h3> Imagem tirada no parque da Tirolesa </h3> <p> Foi inaugurado a Tirolesa </p>";
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


        const vantagem2 = document.querySelector('.noticia2');
        var el2 = document.getElementById('2');

        el2.addEventListener('click', function(e) {

            vantagem2.addEventListener('click', event => {
                popup.style.display = "block";
                // const idElement = event.target.id;
                const idElement = document.getElementById(event.target);

                tit.innerHTML = "<h1> Atrações mais Visitadas </h1>";
                text.innerHTML = "<h4> 22 de outubro 2022 </h4> <p> &bull; Roda gigante DS <br> &bull; Montanha Russa DS <br> &bull; Caroussel ADM <br> &bull; Montanha Russa MA <br> &bull; Barco Viking EDI </p>";
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

        const vantagem3 = document.querySelector('.noticia3');
        var el3 = document.getElementById('3');

        el3.addEventListener('click', function(e) {

            vantagem3.addEventListener('click', event => {
                popup.style.display = "block";
                // const idElement = event.target.id;
                const idElement = document.getElementById(event.target);

                tit.innerHTML = "<h1> Comidas no Parque </h1>";
                text.innerHTML = "<h4> 15 de novembro 2022 </h4> <p> Quanto a alimentação, pode ficar tranquilo, temos diversos tipos de comidas de diferentes nacionalidades. Previamente pensamos naqueles que tem algum tipo de restrição ou opção. </p>";
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

        const vantagem4 = document.querySelector('.noticia4');
        var el4 = document.getElementById('4');

        el4.addEventListener('click', function(e) {

            vantagem4.addEventListener('click', event => {
                popup.style.display = "block";
                // const idElement = event.target.id;
                const idElement = document.getElementById(event.target);

                tit.innerHTML = "<h1> Eventos Novos </h1>";
                text.innerHTML = "<h4> 12 de novembro 2022 </h4> <img class='img-popup' src='App/Views/pages/img/img-EventosNovos.jpeg'> <p> Haverá um show do Post Malone no dia 18 de dezembro </p>";
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

        const vantagem5 = document.querySelector('.noticia5');
        var el5 = document.getElementById('5');

        el5.addEventListener('click', function(e) {

            vantagem5.addEventListener('click', event => {
                popup.style.display = "block";
                // const idElement = event.target.id;
                const idElement = document.getElementById(event.target);

                tit.innerHTML = "<h1> Curiosidades </h1>";
                text.innerHTML = "<h4> 4 de setembro 2022 </h4> <p> &bull; O parque foi criado por estudantes da ETESP <br> &bull; Foi gasto 15 milhões no parque <br> &bull; Cerca de 3 mil pessoas circulam no parque diariamente <br> &bull; Fazemos parque dos 10 maiores parques do Brasil </p>";
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

        const vantagem6 = document.querySelector('.noticia6');
        var el6 = document.getElementById('6');

        el6.addEventListener('click', function(e) {

            vantagem6.addEventListener('click', event => {
                popup.style.display = "block";
                // const idElement = event.target.id;
                const idElement = document.getElementById(event.target);

                tit.innerHTML = "<h1> ETESP </h1>";
                text.innerHTML = "<h4> 8 de novembro 2022 </h4> <img class='img-popup' src='App/Views/pages/img/etesp-home.jpg'> <h3> Imagem da ETESP </h3> <p> Essa é a escola que motivou a criação do parque </p>";
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

        </script>
</body>
</html>