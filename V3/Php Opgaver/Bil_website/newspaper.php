<pre>
<?php 
    print_r($_POST);
    

?>
</pre>
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
        <h4>Kære <?php echo ucfirst($_POST["FirstName"]);  ?>.</h4>
        <h4>Du er nu tilmeldt vores nyhedsbrev.</h4>
        <h5>
            Vi glæder os til hver måned at bringe dig spændende nyheder fra Biler verden. <br>
            Husk, at du altid kan afmelde dig nyhedsbrevet igen ved at følge linket i bunden af nyhedsbrevet.
        </h5>
        <h5>Med venlig hilsen TJ Biler</h5>
    </main>
</body>
</html>