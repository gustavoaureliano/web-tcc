<?php
    
    use \App\Models\Cliente;
    use \App\Models\Ingresso;
    use \App\Models\Pedido;
    use \App\DAO\ClienteDAO;
    use \App\DAO\AtracaoDAO;
    use \App\DAO\IngressoDAO;
    require_once "vendor/autoload.php";

    //$cliente = new Cliente();
    //$cliente->setNome("Miguel");
    //$cliente->setEmail("miguel@email.com");
    //echo $cliente->getNome();
    //echo "<br>";
    //echo $cliente->getEmail();
    //echo "<br>";

    $id = 1;
    $clienteDAO = new ClienteDAO();
    try {
        $data = $clienteDAO->getCliente($id);
        $success = $data["success"];
        $clienteR = $data["cliente"];
        if ($success) {
            http_response_code(200);
            echo json_encode(array('status' => 'success', "data" => $clienteR), JSON_UNESCAPED_UNICODE);
        } else {
            http_response_code(404);
            echo json_encode(array('status' => 'error', "data" => "Nenhum usuário encontrado"), JSON_UNESCAPED_UNICODE);
        }
    } catch (\PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    echo "<br>";
    echo "<pre>";
    var_dump($clienteR);
    $cliente = new Cliente();
    $cliente->setNome($clienteR["Nome"]);
    $cliente->setEmail($clienteR["Email"]);
    echo "<br>";
    echo $cliente->getNome();
    echo "<br>";
    echo $cliente->getEmail();    
    echo "<br>";

    $data = $clienteDAO->getAllClientes();
    $clientes = $data["cliente"];
    echo "<pre>";
    var_dump($clientes);

    $clienteSend = new Cliente();
    $clienteSend->setNome("Guilherme");
    $clienteSend->setSobrenome("Torres");
    $clienteSend->setCpf("123456748");
    $clienteSend->setDataNascimento("1997-08-21");
    $clienteSend->setEmail("guilherme@email.com");
    $clienteSend->setSenha("12345678");

    //echo "Cadastro: ".$clienteDAO->cadastrarCliente($clienteSend);
    //var_dump($clienteDAO->cadastrarCliente($clienteSend));
    //echo '<br>';
    //echo "Login: ".$clienteDAO->checkLogin($clienteSend);
    //echo '<br><br>';

    $atracaoDAO = new AtracaoDAO();
    var_dump($atracaoDAO->getAtracao(1));
    var_dump($atracaoDAO->getAllAtracoes(1));
    echo '<br><br>';

    $ingressoDAO = new IngressoDAO();
    var_dump($ingressoDAO->getIngresso(2));
    var_dump($ingressoDAO->getIngressoCliente(1));
    var_dump($ingressoDAO->getAllIngressos(1));

    $ingresso = new Ingresso();
    $ingresso->setIdTipoIngresso(1);
    $ingresso->setDataInicio("2022-09-08");
    $ingresso->setDataValidade("2022-09-08");

    $pedido = new Pedido();
    $pedido->setIdCliente(1);
    $pedido->setIdCupom(-1);
    $pedido->setIngressos(array($ingresso, $ingresso, $ingresso));

    $compra = $ingressoDAO->comprarIngresso($pedido);
    echo "Pedido: ".$compra;
    
