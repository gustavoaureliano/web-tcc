<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="App/Views/pages/CSS/aglomerado.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="App/Views/pages/CSS/footer.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="App/Views/pages/CSS/menu.css" media="screen" />
    <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title> Dúvidas Frequentes </title>
</head>
<body>
    <?php
        include "Templates/menu.php";
    ?>

    <main class="divPrincipal-duvi">
        <div class="tit-principal">
            <h1> Dúvidas Frequentes </h1>
        </div>
        <div class="div-grande">

                <div class="container">
                    <!-- Accordion -->
                    <div class="accordion">
                        <div class="accordion-item">
                            <h3> Como Funciona o Pagamento? </h3>
                            <p> O pagamento é feito após montado o carrinho de compras, bastanta inserir 
                                seus dados. Voce irá receber um email confirmando seus ingressos, cada ticket 
                                vai ter um QRcode que precisa ser apresentado na parte inicial do parque para então ser efetivado.
                            </p>
                        </div>

                        <div class="accordion-item">
                            <h3> Tem Comida no Parque? </h3>
                            <p> Sim, temos vários parceiros que montam suas barracas pelo parque. São diversas 
                                opções de comidas e bebidas, nos mais variados preços. Existem cupons para 
                                conseguir descontos nos restaurantes. 
                            </p>
                        </div>

                        <div class="accordion-item">
                            <h3> O Parque aceita quais tipos de pagamento? </h3>
                            <p> 
                                Aceitamos cartão de crédito, PIX e boleto  
                            </p>
                        </div>

                        <div class="accordion-item">
                            <h3> O Que Levar Para o Parque? </h3>
                            <p> 
                                É essencial levar documento de identificação, ir com roupas confortáveis, QRcode 
                                do ingresso e guarda chuva. Evite levar muitas coisas para não atraplhar sua diversão
                            </p>
                        </div>

                        <div class="accordion-item">
                            <h3> Deu Algum Problema Relacionado ao Seu Ingresso </h3>
                            <p> 
                                Entre em contato com nosso suporte, está no rodapé de nosso site, em até 3 dias úteis 
                                iremos responder, caso não resolva é possível pedir seu dinheiro de volta 
                            </p>
                        </div>

                        <div class="accordion-item">
                            <h3> Quais São os Requisitos para Poder ir no Parque? </h3>
                            <p> 
                                É livre para todos, porém em algumas atrações é necessário certos requesitos como: altura, 
                                peso e idade. Confira na parte de atrações quais que precisam disso. Se divirta! 
                            </p>

                        </div>

                        <div class="accordion-item">
                            <h3> Como Funciona a Programação do Parque? </h3>
                            <p> 
                                O parque oferece de diversas opções para melhorar a experiência dos visitantes. Todo mês 
                                temos um evento exclusivo, na qual convidamos um artista especial para agitar o parque. Nossas 
                                atrações mudam em datas festivas tanto do parque quanto do Brasil. Acompanhe nossas redes sociais 
                                para se atualizar e ficar por dentro das nossas novidades.  
                            </p>

                        </div>

                    </div>
                    <!-- End Accordion -->
                </div>
                
            </div>
        </div>

        <div class="divSugest">
            <h1> Sua Dúvida Não Foi Sanada? </h1>
            <div class="div-caixa-central">
                <div class="divEmail-nome">
                    <div class="input-email">
                            <div class="titinput">
                                <h2> E-mail: </h2>
                            </div> 
                            <input type="email" name="email" autocomplete="false" required/>
                    </div>

                    <div class="input-nome">
                            <div class="titinput">
                                <h2> Nome: </h2>
                            </div> 
                            <input type="text" name="nome" autocomplete="false" required/>
                    </div>
                </div>
                <div class="divMsg">
                        <div class="titinput">
                            <h2> Mensagem: </h2>
                        </div> 
                        <textarea name="msg" cols="82" rows="8.6"> </textarea>
                    <!-- </div> -->
                    <input type="submit" value="Enviar"/>
                    <!-- assim que apertar o botão vai aparecer um pop up dizendo do spam e mensagens inuteis -->
                </div>
            </div>
    </main>

    <?php
        include "Templates/footer.php";
    ?>

    <script> 

        // Efeito dúvida
        let accordions = document.querySelectorAll(".accordion");

        Array.from(accordions).forEach((accordion) => {
        // Get all Accordion items for each Accordion
        items = accordion.querySelectorAll(".accordion-item");

        Array.from(items).forEach((item) => {
            // Set styles for all opened items
            if (item.classList.contains("open")) {
            item.querySelector("p").style.maxHeight =
                item.querySelector("p").scrollHeight + 30 + "px";
            }

            // Get all titles of accordion items
            let title = item.querySelector("h3");

            title.addEventListener("click", (e) => {
            // Get target element (title of accordion)
            let target = e.target;

            // Get the text section of the element
            let textbox = target.nextElementSibling;

            // Get parent element (accordion item)
            let parent = target.parentElement;

            // Toggle 'open' class of element
            parent.classList.toggle("open");

            // Set styles
            if (parent.classList.contains("open")) {
                textbox.style.maxHeight = textbox.scrollHeight + 30 + "px";
            } else {
                textbox.style.maxHeight = null;
            }

            // Get all sibling elements
            let siblingsElements = parent.parentElement.querySelectorAll(
                ".accordion-item"
            );

            // Close all other sibling items
            Array.from(siblingsElements).forEach((i) => {
                element = i.querySelector("h3");
                if (element != target) {
                element.nextElementSibling.style.maxHeight = null;
                element.parentElement.classList.remove("open");
                }
            });
            });
        });
        });
    </script>
</body>
</html>