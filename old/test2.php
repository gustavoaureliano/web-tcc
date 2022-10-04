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

    echo $_REQUEST["name"];
?>
<a href="test.php">Go to Test</a>
<a href="test3.php">Go to Test3</a>