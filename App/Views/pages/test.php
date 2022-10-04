<?php 
    //echo "<br>Page<br>";
    //var_dump($parametros);
    $test = $parametros["test"];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="App/Views/pages/css/style.css">
    <title>Test</title>
</head>
<body>
    <div>
        <form method="post">
            <h1>Name</h1>
            <p>
                <input type="text" name="name" id="name" value="<?php echo $test["name"] ?>">
            </p>
            <h1>Email</h1>
            <p>
                <input type="text" name="email" id="email" value="<?php echo $test["email"] ?>">
            </p>
            <input type="submit" value="hello">
        </form>
    </div>
</body>
</html>