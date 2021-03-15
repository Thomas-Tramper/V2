<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    $ID = $_GET["id"];
    echo $ID;

    $db = new mysqli("localhost","Thomas","d11m03å02","adea");

    if ($db->connect_error) {
        die("Connection to database faild: ". $db->connect_error);
    }
    $result = $db->query("SELECT * FROM products Where PID = $ID");
    if ($db->error) {
        echo $db->error;
    }
    else{
        while($row = $result->fetch_assoc())
        {
           $Product = $row; 
        }
    }
    
?>

<!DOCTYPE html>
<html lang="dk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <?php 
            include "includes/topmenu.php"; 
            include "includes/sidemenu.php";
    ?>
    <div class="content">
        <main>
            <h1><?php echo $Product["PName"];?></h1>
            <div class="ShowProduct">
                <section class="leftColumn">
                <p>
                    <?php 
                        if(isset($Product['PPic']))
                        {
                            $img = explode(" ",$Product['PPic']);
                            for ($i=0; $i < count($img); $i++) { 
                                echo "<img src='img/{$img[$i]}' alt='?'>";
                            }
                            
                        }
                        else{
                            echo "<img src='img/imagecomingsoon.png' alt='?'>";
                        }
                    ?>
                </p>
                <h2>Beskrivelse:</h2>
                <p><?php echo $Product["PDesc"]?></p>
                </section>
                <section class="rightColumn">
                    <button><a href="#">Køb nu!</a></button>
                    <p><span>Antal stjerner: </span><?php echo $Product["PStars"]; ?></p>
                    <p><span>Støvle stivhed: </span><?php echo $Product["PStiff"]; ?></p>
                    <p><span>Understøtter: </span><?php echo $Product["PSupp"]; ?></p>
                    <p><span>Pris: </span><?php echo $Product["PPrice"]; ?></p>
                </section>
            </div>
        </main> 
        <?php include "includes/footer.php"; ?>    
    </div>
</body>
</html>
