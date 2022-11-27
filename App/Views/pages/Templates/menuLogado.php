<html>
  <body>
    <?php
    if ( session_status() !== PHP_SESSION_ACTIVE )
    {
       session_start();

       //$_SESSION['imgPerfil'] = $Clientedao->getFotoCliente($result["cliente"]['idCliente']);
    }

    $Clientedao = new App\DAO\ClienteDAO();

    $cliente = $_SESSION['cliente'];
    //var_dump($cliente);

    $nome = $cliente['Nome'];
    $email = $cliente['Email'];
    $senha = $cliente['Senha'];
    $cpf = $cliente['CPF'];
    $img = $cliente['Foto']; 

    ?>
    <nav>
        <div class='menu-control'>
            <div class='top'></div>
            <div class='mid'></div>
            <div class='bottom'></div>
        </div>

        <div class='divlogo'>
            <a href='homeLogado'>
                <img src='App/Views/pages/img/LogoRoxa2.png'>
            </a>
        </div>

        <ul data-animation='center'>
            <li> <a href='homeLogado'> Home </a> </li>
            <li class='dropdown'>
                <button onclick='myFunction()' class='dropbtn'> Informações </button>
                <img src='App/Views/pages/img/seta-para-baixo.png' />
                <div id='Dropdown-menu' class='dropdown-content'>
                    <a href='atracaoLogado'> Atrações </a>
                    <a href='eventosLogado'> Eventos </a>
                </div>
            </li>
            <li> <a href='ingressosLogado'> Ingressos </a> </li>
            <li> <a href='cuponsLogado'> Cupons </a> </li>
            <!-- <li> <a href='mapainterativo'> Mapa Interativo </a> </li> -->
            <li> <img src='' /> <a class='carrinho' href='carrinhoLogado'> Carrinho </a> </li>
            <li class='menu-mobile'> <a href='Perfil'> Perfil </a> </li>
            <li class='menu-mobile'> <a href=''> Logout </a> </li>
        </ul>

        <div class='div-usuario'>
            <p> <a onclick='PerfilFunction()' class='dropbtn2'> Minha Conta </a> </p>
            <div class='div-imagem-perfil'>
                <?php
                    if (isset($img))
                    {
                        $img64 = base64_encode($img);
                        echo "<img onclick='PerfilFunction()' class='dropbtn2' src='data:image/jpeg;base64, $img64'> ";
                    } 
                    else{
                        echo "<img onclick='PerfilFunction()' class='dropbtn2' src='App/Views/pages/img/sem-imagem.png'> ";
                    }
                ?>
            </div>            
            <div id='Dropdown-usuario' class='dropdown-content-usuario'>
                    <a href='perfil'> Perfil </a>
                    <a href='logout'> Logout </a>
            </div>
        </div>
    </nav>

    <script>
        function myFunction() {
            document.getElementById('Dropdown-menu').classList.toggle('show');
        }
        function PerfilFunction() {
            document.getElementById('Dropdown-usuario').classList.toggle('show');
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
        window.onclick = function (event) {
            if (!event.target.matches('.dropbtn2')) {
                var dropdowns2 = document.getElementsByClassName('dropdown-content-usuario');
                var i;
                for (i = 0; i < dropdowns2.length; i++) {
                    var openDropdown = dropdowns2[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }

        const btnMenu = document.querySelector('div.menu-control');
        const menu = document.querySelector('nav');

        function ativar_menu() {

            menu.classList.toggle('on');

        }

        btnMenu.addEventListener('click', ativar_menu);

    </script>
   </body>
</html>