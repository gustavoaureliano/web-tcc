<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="App/Views/pages/CSS/ingressos.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="App/Views/pages/CSS/footer.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="App/Views/pages/CSS/menu.css" media="screen" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <title> Ingressos </title>
</head>
<body>
    <?php
        include 'Templates/menu.php';
    ?>
    
    <div class="div-imagem-principal">
        <img src="App/Views/pages/img/ingressos-principal.jpeg">
        <div class="caixa-principal-text">
            <h2> INGRESSOS </h2>
            <p> Garanta o seu e corra para o parque </p>
        </div>
    </div>

    <div class="efeito-abaixa">
        <a href="#sec2">
                <div class="scroll-down"> </div>
        </a>
    </div>

    <div id="sec2" class="container-grande">
        <div class="container-caixa-texto">
            <div class="esquerda-texto"> 
                <div class="caixa-texto">
                    <div class="caixa-texto-tit">
                        <h2>
                            Opa, Está Quase Dentro do Parque
                        </h2>
                    </div>
                    <div class="caixa-texto-text">
                        <p>
                            Como vai ? está a fim de aproveitar a vida? confira nossos ingressos! <br>
                            Pensamos sempre em nossos visitantes, por isso trouxemos muitos tipos de ingressos 
                            para todos os gostos, até mesmo para aqueles que estão com a grana apertada, mas que ainda 
                            sim querem se divertir. Veja quais dentre as opções mais te agrada e corra para garantir a sua estadia.

                        </p>
                    </div>
                </div>
            </div>
            <div class="direta-imagem"> 
                <div class="div-direita-imagem">
                    <img src="App/Views/pages/img/pessoas-ingressos2.jpg">
                </div>
            </div>
        </div>
    </div>

    <div class="efeito-text">
        <div class="title">
            <h2> ETESP Universe Park! </h2>
        </div>
    </div>

    <div class="container">
        <div class="cards">
            <div class="card">
                <img src="App/Views/pages/img/gato1.jpg" alt="" />
                <div class="card-content">
                    <span> INGRESSO </span>
                    <h1> Semana </h1>
                    <h3> R$ 160 </h3>
                    <p>
                        Trata-se do ingresso comum, valor padrão que cada um que vai ao parque paga
                    </p>
                    <button class="btnAdicionar"> Adicionar ao Carrinho </button>
                </div>
            </div>

            <div class="card">
                <img src="App/Views/pages/img/gato2.jpg" alt="" />
                <div class="card-content">
                    <span> INGRESSO </span>
                    <h1> Final de Semana </h1>
                    <h3> R$ 130 </h3>
                    <p>
                        Pensado para você e sua família virem ao parque gastando 
                        menos e se divertir mais
                    </p>
                    <button class="btnAdicionar" onClick="clickButton()"> Adicionar ao Carrinho </button>
                </div>
            </div>
            
            <div class="card">
                <img src="App/Views/pages/img/gato2.jpg" alt="" />
                <div class="card-content">
                    <span> INGRESSO </span>
                    <h1> Combo Família</h1>
                    <h3> R$ 160 </h3>
                    <p>
                        Pensado para você e sua família virem ao parque gastando 
                        menos e se divertir mais
                    </p>
                    <button class="btnAdicionar" onClick="clickButton()"> Adicionar ao Carrinho </button>
                </div>
            </div>

            <div class="card">
                <img src="App/Views/pages/img/gato2.jpg" alt="" />
                <div class="card-content">
                    <span> INGRESSO </span>
                    <h1> Combo Família</h1>
                    <h3> R$ 160 </h3>
                    <p>
                        Pensado para você e sua família virem ao parque gastando 
                        menos e se divertir mais
                    </p>
                    <button class="btnAdicionar" onClick="clickButton()"> Adicionar ao Carrinho </button>
                </div>
            </div>

            <div class="card">
            <img src="App/Views/pages/img/gato3.jpg" alt="" />
            <div class="card-content">
                <span> INGRESSO </span>
                <h1> Diversão e comilança </h1>
                <h3> R$ 160 </h3>
                <p>
                    Conta com um ingresso + combo de sua escolha de nossos restaurantes
                </p>
                <button class="btnAdicionar"> Adicionar ao Carrinho </button>
            </div>
            </div>
            <div class="card">
            <img src="App/Views/pages/img/gato4.jpg" alt="" />
            <div class="card-content">
                <span> INGRESSO </span>
                <h1> Parças </h1>
                <h3> R$ 160 </h3>
                <p>
                    Venha com seus amigos e ganhe um belo desconto, equivalente a quantidade de amigos
                </p>
                <button class="btnAdicionar"> Adicionar ao Carrinho </button>
            </div>
            </div>
            <div class="card">
            <img src="App/Views/pages/img/gato4.jpg" alt="" />
                <div class="card-content">
                    <span> INGRESSO </span>
                    <h1> Mais que um Show  </h1>
                    <h3> R$ 160 </h3>
                    <p>
                        Venha conhecer além de nossos eventos, vem um ingresso + acesso de show de sua escolha
                    </p>
                    <button type="submit" class="btnAdicionar"> Adicionar ao Carrinho </button>
                </div>
            </div>
            <div class="card">
                <img src="App/Views/pages/img/gato6.jpg" alt="" />
                <div class="card-content">
                    <span> INGRESSO </span>
                    <h1> X-Tudo </h1>
                    <h3> R$ 160 </h3>
                    <p>
                        Combo especial de um ingresso + show + lanche do parque + lembrancinha do parque
                    </p>
                    <button class="btnAdicionar"> Adicionar ao Carrinho </button>
                </div>
            </div>
        </div>
        </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"> </script>


    <!-- <div class="footer-cima-imagem">
        <h2> imagem decorativa </h2>
    </div> -->

    <?php
        include 'Templates/footer.php';
    ?>

    <button class="scrollTop" onclick="backTop();">
        <img src="App/Views/pages/img/botao-subir.png">
    </button>


    <script>

        //Botão Voltar para cima
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


        //Ingressos 
        const container = document.querySelector(".container");
        const cards = document.querySelector(".cards");
        const btnAdicionar = document.querySelector(".btnAdicionar");
    
        /* keep track of user's mouse down and up */
        let isPressedDown = false;
        /* x horizontal space of cursor from inner container */
        let cursorXSpace;

        container.addEventListener("mousedown", (e) => {
            isPressedDown = true;
            cursorXSpace = e.offsetX - cards.offsetLeft;
            container.style.cursor = "grabbing";
            // cards.style.pointerEvents = 'none';
        });

        container.addEventListener("mouseup", () => {
            container.style.cursor = "grab";
            // cards.style.pointerEvents = 'none';
        });

        window.addEventListener("mouseup", () => {
            isPressedDown = false;
            container.style.cursor = "pointer";
            // cards.style.pointerEvents = 'auto';

        });


        cards.addEventListener("onClick", () => {
            cards.style.pointerEvents = 'auto';
            // card.style.pointerEvents = 'none';

        });


        container.addEventListener("mousemove", (e) => {
        if (!isPressedDown) return;
            e.preventDefault();
            cards.style.left = `${e.offsetX - cursorXSpace}px`;
            // cards.style.pointerEvents = 'none';
            boundCards();
        });

        function boundCards() {
            const container_rect = container.getBoundingClientRect();
            const cards_rect = cards.getBoundingClientRect();
            // cards.style.pointerEvents = 'none';
            // card.style.pointerEvents = 'none';


            if (parseInt(cards.style.left) > 0) {
                cards.style.left = 0;
            } else if (cards_rect.right < container_rect.right) {
                cards.style.left = `-${cards_rect.width - container_rect.width}px`;
            }
        }

    </script>
</body>
</html>