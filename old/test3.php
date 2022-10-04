<?php session_start() 
?>
<style>
    /** {margin: 0; padding: 0; box-sizing: border-box;}*/
    html, body {
        width: 100%;
        height: 100%;
    }
    body {
        font-family: arial, sans-serif;
    }
    div {
        margin: 0 auto;
        width: 100%;
        max-width: 300px;
        height: auto;
        display: flex;
        justify-content: center;
        flex-direction: column;
        padding: 10px 25px;
        border: 1px solid #c0c0c0;
        border-radius: 15px;
    }
</style>
<div>
    <p>SESSION</p>
    <h1><?php echo $_SESSION["name"] ?></h1>
    <p>GET</p>
    <h1><?php echo $_GET["nameGet"] ?></h1>
    <p>Post</p>
    <h1><?php echo $_POST["namePost"] ?></h1>
    <p>Request</p>
    <h1><?php echo $_REQUEST["nameGet"] ?></h1>
    <h1><?php echo $_REQUEST["namePost"] ?></h1>
    <h1><?php echo $_REQUEST["name"] ?></h1>
</div>