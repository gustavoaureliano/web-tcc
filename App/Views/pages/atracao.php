<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="App/Views/pages/CSS/footer.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="App/Views/pages/CSS/menu.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="App/Views/pages/CSS/atracao.css" media="screen" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    
    <title> Atrações </title>
</head>
<body>
    <?php
        include 'Templates/menu.php';
    ?>

    <div class="div-text-principal">
        <h2> Atrações </h2>
        <p> Destaques </p>
    </div>
    
    <div class="div-caixa-principal">
        <div class="caixa-topic">
            <ul>
                <li> <a href="atracao" style="color:#181818"> Destaques </a> </li>
                <li> <a href="atracaoDS"> Desenvolvimento de Sistemas </a> </li>
                <li> <a href="atracaoMA"> Meio Ambiente </a> </li>
                <li> <a href="atracaoADM"> Administração </a> </li>
                <li> <a href="atracaoELO"> Eletrônica </a> </li>
                <li> <a href="atracaoEDI"> Edificações </a> </li>
            </ul>
        </div>

        <div class="caixa-principal">
            <div class="caixa-grande">
                <div class="caixa-top">
                    <div class="caixa-top-img">
                        <img src="App/Views/pages/img/destaque1.png" id="imagemGrande">
                    </div>
                </div>

                <div class="carousel-bottom">
                    <div class="carousel-bottom-grande">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-11 col-md-10 col-centered">

                                        <div id="carousel" class="carousel slide" data-ride="carousel" data-type="multi" data-interval="2500">
                                            <div class="carousel-inner">
                                                <div class="item active">
                                                    <div class="carousel-col">
                                                        <div class="block red img-responsive"></div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="carousel-col">
                                                        <div class="block green img-responsive"></div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="carousel-col">
                                                        <div class="block blue img-responsive"></div>
                                                    </div>
                                                </div>
                                                <div class="item">
                                                    <div class="carousel-col">
                                                        <div class="block yellow img-responsive"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            
                                        </div>

                                    </div>
                                </div>
                            </div>

                          <div id="container">
                            <div id="slider-container">
                                <span onclick="slideRight()" class="btn"></span>
                                <div id="slider">
                                    <div class="slide"> <img src="App/Views/pages/img/destaque1.png" onclick="trocarImg1()"> </div>
                                    <div class="slide"> <img src="App/Views/pages/img/destaque2.png" onclick="trocarImg2()"> </div>
                                    <div class="slide"> <img src="App/Views/pages/img/destaque3.png" onclick="trocarImg3()"> </div>
                                    <div class="slide"> <img src="App/Views/pages/img/destaque4.png" onclick="trocarImg4()"> </div>
                                    <div class="slide"> <img src="App/Views/pages/img/destaque5.png" onclick="trocarImg5()"> </div>
                                    <div class="slide"> <img src="App/Views/pages/img/destaque6.png" onclick="trocarImg6()"> </div>
                                    <!-- <div class="slide"> <img src="App/Views/pages/img/gato7.jpg" onclick="trocarImg7()"> </div>
                                    <div class="slide"> <img src="App/Views/pages/img/gato8.png" onclick="trocarImg8()"> </div> -->
                                </div>
                                <span onclick="slideLeft()" class="btn"></span>
                            </div>
                         </div>
                      </div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="div-especific">
        <div class="div-especific-grande">
            <div class="div-especific-text">
                <div class="caixa-especific-text">
                    <h2> Destaques </h2>
                    <p> Essas são as atrações de destaque em nosso parque. Isso inclui as mais visitadas, inéditas e
                        recomendadas. </br></br>
                        &bull; A primeira atração da lista foi feita em homenagem a ETESP.
                        </br>
                        &bull; A quarta atração da lista é a mais visitada do parque.
                        </br>
                        &bull; As atrações são selecionadas por meio das opiniões dos próprios visitantes.
                    </p>
                </div>
            </div>
            <div class="div-especific-imagem">
                <img src="App/Views/pages/img/atracoes-destaque.jpg">
            </div>
        </div>
    </div>

    <?php
        include 'Templates/footer.php';
    ?>


    <script>
            var container = document.getElementById('container')
            var slider = document.getElementById('slider');
            var slides = document.getElementsByClassName('slide').length;
            var buttons = document.getElementsByClassName('btn');


            var currentPosition = 0;
            var currentMargin = 0;
            var slidesPerPage = 0;
            var slidesCount = slides - slidesPerPage;
            var containerWidth = container.offsetWidth;
            var prevKeyActive = false;
            var nextKeyActive = true;

            window.addEventListener("resize", checkWidth);

            function checkWidth() {
                containerWidth = container.offsetWidth;
                setParams(containerWidth);
            }

            function setParams(w) {
                if (w < 551) {
                    slidesPerPage = 1;
                } else {
                    if (w < 901) {
                        slidesPerPage = 2;
                    } else {
                        if (w < 1101) {
                            slidesPerPage = 3;
                        } else {
                            slidesPerPage = 4;
                        }
                    }
                }
                slidesCount = slides - slidesPerPage;
                if (currentPosition > slidesCount) {
                    currentPosition -= slidesPerPage;
                };
                currentMargin = - currentPosition * (100 / slidesPerPage);
                slider.style.marginLeft = currentMargin + '%';
                if (currentPosition > 0) {
                    buttons[0].classList.remove('inactive');
                }
                if (currentPosition < slidesCount) {
                    buttons[1].classList.remove('inactive');
                }
                if (currentPosition >= slidesCount) {
                    buttons[1].classList.add('inactive');
                }
            }

            setParams();

            function slideRight() {
                if (currentPosition != 0) {
                    slider.style.marginLeft = currentMargin + (100 / slidesPerPage) + '%';
                    currentMargin += (100 / slidesPerPage);
                    currentPosition--;
                };
                if (currentPosition === 0) {
                    buttons[0].classList.add('inactive');
                }
                if (currentPosition < slidesCount) {
                    buttons[1].classList.remove('inactive');
                }
            };

            function slideLeft() {
                if (currentPosition != slidesCount) {
                    slider.style.marginLeft = currentMargin - (100 / slidesPerPage) + '%';
                    currentMargin -= (100 / slidesPerPage);
                    currentPosition++;
                };
                if (currentPosition == slidesCount) {
                    buttons[1].classList.add('inactive');
                }
                if (currentPosition > 0) {
                    buttons[0].classList.remove('inactive');
                }
            };


            //trocar de imagem
            var container = document.getElementById('imagemGrande');
            function trocarImg1(){
                document.getElementById("imagemGrande").src = 'App/Views/pages/img/destaque1.png'; 
            }
            function trocarImg2(){
                document.getElementById("imagemGrande").src = 'App/Views/pages/img/destaque2.png'; 
            }
            function trocarImg3(){
                document.getElementById("imagemGrande").src = 'App/Views/pages/img/destaque3.png'; 
            }
            function trocarImg4(){
                document.getElementById("imagemGrande").src = 'App/Views/pages/img/destaque4.png'; 
            }
            function trocarImg5(){
                document.getElementById("imagemGrande").src = 'App/Views/pages/img/destaque5.png'; 
            }
            function trocarImg6(){
                document.getElementById("imagemGrande").src = 'App/Views/pages/img/destaque6.png'; 
            }
            function trocarImg7(){
                document.getElementById("imagemGrande").src = 'App/Views/pages/img/destaque7.png'; 
            }
            function trocarImg8(){
                document.getElementById("imagemGrande").src = 'App/Views/pages/img/destaque8.png'; 
            }
            
        </script>
</body>
</html>