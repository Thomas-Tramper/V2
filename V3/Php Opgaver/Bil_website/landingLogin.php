<pre>
<?php 
    print_r($_POST);
    session_start();
    $_SESSION["Login"] = $_POST;
    print_r($_SESSION);
?>
</pre>
<!DOCTYPE html>
<html lang="dk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" http-equiv="refresh"content="1;http://localhost/Bil_website">
    <link rel="stylesheet" href="style.css">
    
    


    <title>Document</title>
</head>
<body class="newspaper">
    <main>
        <div class="back">
            <a href="index.php">&#129092;</a>
        </div>
        <h4>Du er nu login</h4>
    </main>
</body>
</html>