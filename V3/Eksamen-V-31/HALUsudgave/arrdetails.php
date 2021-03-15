<?php
    if(!isset($_SESSION)) 
    { 
        session_start();
    }
    $ID = $_GET["id"];
    $db = new mysqli("localhost","Thomas","d11m03å02","hansel_og_petal");
    if ($db->connect_error) 
    {
        die("Connection to database faild: ". $db->connect_error);
    }
    $result = $db->query("SELECT * FROM arrangements Where id = $ID");
    if ($db->error) 
    {
        echo $db->error;
    }
    else
    {
        $Bouquet = $result->fetch_assoc(); 
    }

    if (isset($Bouquet["image"])) 
    {
        $BouquetImg = $Bouquet["image"];
    }
        else
    {
        $BouquetImg = "imagecomingsoon.png";
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Hansel & Petal</title>
</head>

<body class="content"></body>

    <?php include "includes/header.php" ?>

    <main class="arrdetails">
        <section>
            <article>
                <img src="img/<?php echo $BouquetImg ?>" alt="<?php echo $Bouquet["alt"] ?>">
                <p class="arrprice">Price from $<?php echo $Bouquet["price"] ?></p>
            </article>
            <article>
                <h1><?php echo $Bouquet["title"] ?></h1>
                <?php echo $Bouquet["description"] ?>
            </article>
            <article>
                <h3>How to Order</h3>
                <p>All the flowers for our mixed arrangements are carefully selected by <a href="designers.php">our talented designers</a> using the freshest flowers in season.</p>
                <p>To discuss your individual requirements, please call Hansel and Petal toll-free on <b>800-555-0199</b>.</p>
            </article>
        </section>
    </main>

    <?php include "includes/footer.php" ?>

</body>
</html>
