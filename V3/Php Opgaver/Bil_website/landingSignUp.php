<?php 
    session_start();


?>
<!DOCTYPE html>
<html lang="dk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body class="newspaper">
    <main>
        <div class="back">
            <a href="index.php">&#129092;</a>
        </div>
        <h4>Velkommen til, <?php echo $_SESSION["Login"]["brugernavn"]?>. Du kan logge ind her:</h4>
        <div class="formHolder">
            <div class="loginStyle">
                <form method="post"  action="landingLogin.php">
                    <label for="brugernavn">brugernavn: </label>
                    <input type="text" id="brugernavn" name="brugernavn">
                    <label for="password">password: </label>
                    <input type="text" id="password" name="password">
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
        
        <pre>
            <?php 
                print_r($_POST);
                

            ?>
        </pre>
    </main>
</body>
</html>