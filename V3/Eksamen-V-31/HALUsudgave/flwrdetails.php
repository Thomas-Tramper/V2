<?php
    if(!isset($_SESSION)) 
    { 
        session_start();
    }
    $Name = $_GET["name"];
    echo($Name);
    
    $db = new mysqli("localhost","Thomas","d11m03å02","hansel_og_petal");
    if ($db->connect_error) 
    {
        die("Connection to database faild: ". $db->connect_error);
    }
    $result = $db->query("SELECT * FROM flowers Where FName='$Name'");
    if ($db->error) 
    {
        echo $db->error;
    }
    else
    {
        $flower = $result->fetch_assoc(); 
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

<body class="content">

<?php include "includes/header.php" ?>

    <main class="arrdetails">
        <section>
            <article>
                <img src="img/<?php echo $flower["FImg"] ?>" alt="<?php echo $flower["FAlttxt"] ?>">
                <p class="arrprice">Price per stem $<?php echo $flower["FPrice"] ?></p>
            </article>
            <article>
                <h1><?php echo $flower["FName"] ?></h1>
                <?php echo $flower["FDesc"] ?>
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
