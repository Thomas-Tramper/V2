<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

    $db = new mysqli("localhost","Thomas","d11m03å02","adea");

    if ($db->connect_error) {
        die("Connection to database faild: ". $db->connect_error);
    }
    $result = $db->query("SELECT * FROM products ORDER BY PID DESC ");
    if ($db->error) {
        echo $db->error;
    }
    else{
        
        while($row = $result->fetch_assoc())
        {
           $Products[] = $row; 
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>EDEA skates</title>
</head>

<body>

    <?php 
        include "includes/topmenu.php"; 
        include "includes/sidemenu.php";
    ?>
 
    <div class="content">
        <main>
            <h1>EDEA shop</h1>
            <section>
                <div class="products">
                <?php
                 
                for ($i=0; $i < count($Products); $i++) {    
                ?>
                    <article>
                        <?php 
                        if(isset($Products[$i]['PPic']))
                        {
                            $img = explode(" ",$Products[$i]['PPic'])[0];
                        }
                        else{
                            $img = "imagecomingsoon.png";
                        }
                        ?>
                        <img src="<?php echo "img/$img";?>" alt="Piano Edea skate">
                        <h3><?php echo $Products[$i]['PName'];?></h3>
                        <p>Antal stjerner:<?php echo $Products[$i]['PStars'];?></p>
                        <p>Beskrivelse:</p>
                        <p><?php echo $Products[$i]['PDesc'];?></p>
                        <p>Stivhed: <?php echo $Products[$i]['PStiff'];?></p>
                        <p>Understøtter: <?php echo $Products[$i]['PSupp'];?></p>
                        <p>Pris: <?php echo $Products[$i]['PPrice'];?>,-</p>
                        <button><a href="ShowProduct.php?id=<?php echo $Products[$i]['PID']?>">Køb nu!</a></button>
                    </article>
                    <?php       }?>

                </div>
            </section>
        </main>

        <?php include "includes/footer.php"; ?>

    </div>

</body>
</html>