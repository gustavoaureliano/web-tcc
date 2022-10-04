<?php
    session_start();
    echo "Get";
    var_dump($_GET);
    echo "Post";
    var_dump($_POST);
    echo "Cookie";
    var_dump($_COOKIE);
    echo "Request";
    var_dump($_REQUEST);
    echo "Session";
    var_dump($_SESSION);
    echo "Server";
    var_dump($_SERVER);

    $name = "Gustavo";
    $_REQUEST["name"] = $name;
    $_SESSION["name"] = $name;

?>
<a href="test2.php">Got to Test2</a>
<?php
    include("test2.php")
?>

    
