<?php
    echo "
    <nav>
        <div class='menu-control'>
            <div class='top'></div>
            <div class='mid'></div>
            <div class='bottom'></div>
        </div>

        <div class='divlogo'>
            <a href='home'>
                <img src='App/Views/pages/img/LogoRoxa2.png'>
            </a>
        </div>

        <ul data-animation='center'>
            <li> <a href='home'> Home </a> </li>
            <li class=dropdown'>
                <button onclick='myFunction()' class='dropbtn'> Informações </button>
                <img src='App/Views/pages/img/seta-para-baixo.png' />
                <div id='myDropdown' class='dropdown-content'>
                    <a href='atracao'> Atrações </a>
                    <a href='eventos'> Eventos </a>
                </div>
            </li>
            <li> <a href='ingressos'> Ingressos </a> </li>
            <li> <a href='cupons'> Cupons </a> </li>
            <!-- <li> <a href='mapainterativo'> Mapa Interativo </a> </li> -->
            <li> <img src='' /> <a class='carrinho' href='carrinho'> Carrinho </a> </li>
            <li class='menu-mobile'> <a href='login'> Login </a> </li>
            <li class='menu-mobile'> <a href='cadastro'> Cadastro </a> </li>
        </ul>

        <div class='Login-Cadastro'>
            <div class='efeito-borda'>
                <a href='login'>
                    <button class='btnLogin'>
                        <span>
                            <span>
                                <span>
                                    Login
                                </span>
                            </span>
                        </span>
                    </button>
                </a>
            </div>
            <div class='efeito-borda'>
                <a href='cadastro'>
                    <button class='btnCadastro'>
                        <span>
                            <span>
                                <span>
                                    Cadastro
                                </span>
                            </span>
                        </span>
                    </button>
                </a>
            </div>
        </div>
    </nav>

    <script>
        function myFunction() {
            document.getElementById('myDropdown').classList.toggle('show');
        }

        window.onclick = function (event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName('dropdown-content');
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }

        const btnMenu = document.querySelector('div.menu-control')
        const menu = document.querySelector('nav')

        function ativar_menu() {

            menu.classList.toggle('on');

        }

        btnMenu.addEventListener('click', ativar_menu)

        function typeWriter(elemento) {
            const textoArray = elemento.innerHTML.split('');
            elemento.innerHTML = '';

            textoArray.forEach((letra, i) => {
                setTimeout(() =>
                    elemento.innerHTML += letra, 135 * i);
            });
        }
    </script>
    ";
?>
