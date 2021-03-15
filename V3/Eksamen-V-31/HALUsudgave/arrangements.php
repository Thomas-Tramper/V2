<?php
    if(!isset($_SESSION)) 
    { 
        session_start();
    }
    $db = new mysqli("localhost","Thomas","d11m03å02","hansel_og_petal");
    if ($db->connect_error) 
    {
        die("Connection to database faild: ". $db->connect_error);
    }
    $result = $db->query("SELECT * FROM arrangements ");
    if ($db->error) 
    {
        echo $db->error;
    }
    else
    {
        while($row = $result->fetch_assoc())
        {
            $Bouquets[] = $row; 
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
    <title>Hansel & Petal</title>
</head>

<body class="content">

    <?php include "includes/header.php" ?>

    <main>
        <section class="featured">
            <h1>Floral Arrangements for Any Occasion</h1>
            <div class="twocol">
                <article>
                    <p>Hansel &amp; Petal offers you the freshest flowers for long-lasting enjoyment, and our designers create one-of-a-kind arrangements guaranteed to bring smiles to everyone's faces.</p><br>
                    <p>Choose from our popular arrangements or <a href="bouquet.php" class="btn">Create Your Own Custom Bouquet </a></p>
                </article>
                <article>
                    <p class="overlay large">Spring Lilacs and Tulips</p>
                    <p class="overlay price">Starting at $39.95</p>
                    <img src="img/980_lilacs_tulips_157045915.jpg" alt="Mixed Arrangement">
                </article>
            </div>
        </section>
        <section>
            <article class="arrindex">
                <ul class="indexcontent">
                    <?php 
                        for ($i=0; $i < count($Bouquets) ; $i++) 
                        {
                            if (isset($Bouquets[$i]["image"])) 
                            {
                                $BouquetImg = $Bouquets[$i]["image"];
                            }
                            else
                            {
                                $BouquetImg = "imagecomingsoon.png";
                            } 
                            ?>
                            <li>
                            <a href="arrdetails.php?id=<?php echo $Bouquets[$i]['id']?>">
                                <img src="img/<?php echo $BouquetImg; ?>" alt="<?php echo $Bouquets[$i]["alt"]?>">
                                <h4><?php echo $Bouquets[$i]["title"]?></h4>
                                <p>From $<?php echo $Bouquets[$i]["price"]?></p>
                            </a>
                            </li>
                            <?php 
                        }
                    ?>
                    <!-- <li>
                        <a href="arrdetails.php">
                            <img src="img/200_arrangement_yellow_tulip.jpg" alt="Yellow Tulips">
                            <h4>Burst of Yellow</h4>
                            <p>From $19.95</p>
                        </a>
                    </li>
                    <li>
                        <a href="arrdetails.php">
                            <img src="img/200_arrangement_163066655.jpg" alt="Mixed Mums" >
                            <h4>Polka Dot Pail</h4>
                            <p>From $25.95</p>
                        </a>
                    </li>
                    <li>
                        <a href="arrdetails.php">
                            <img src="img/200_tulips_daffodils_139756476.jpg" alt="Mixed Tulips" >
                            <h4>Green Thumb</h4>
                            <p>From $22.95</p>
                        </a>
                    </li>
                    <li>
                        <a href="arrdetails.php">
                            <img src="img/200_bouquet_watering_can_orange_163066621.jpg" alt="Watering Can with Mums" >
                            <h4>It's Raining Flowers</h4>
                            <p>From $19.95</p>
                        </a>
                    </li>
                    <li>
                        <a href="arrdetails.php">
                            <img src="img/200_carnations_basket_92246977.jpg" alt="Basket of Carnations" >
                            <h4>Get Well Soon</h4>
                            <p>From $19.95</p>
                        </a>
                    </li>
                    <li>
                        <a href="arrdetails.php">
                            <img src="img/200_lilacs_tulips_157045915.jpg" alt="Tulips and Lilac" >
                            <h4>Bon Anniversaire!</h4>
                            <p>From $25.95</p>
                        </a>
                    </li>
                    <li>
                        <a href="arrdetails.php">
                            <img src="img/200_sunflowers_146748795.jpg" alt="Sunflowers" >
                            <h4>Brighten Any Day</h4>
                            <p>From $22.95</p>
                        </a>
                    </li>
                    <li>
                        <a href="arrdetails.php">
                            <img src="img/200_white_tulip_163199928.jpg" alt="White Tulips" >
                            <h4>Purely Beautiful</h4>
                            <p>From $19.95</p>
                        </a>
                    </li>
                    <li>
                        <a href="arrdetails.php">
                            <img src="img/200_tulips_daffodils_153986115.jpg" alt="Mixed Tulips" >
                            <h4>Tea for Two</h4>
                            <p>From $15.95</p>
                        </a>
                    </li>
                    <li>
                        <a href="arrdetails.php">
                            <img src="img/200_arrangement_94972439.jpg" alt="Mixed Bouquet" >
                            <h4>Thinking of You</h4>
                            <p>From $35.95</p>
                        </a>
                    </li>
                    <li>
                        <a href="arrdetails.php">
                            <img src="img/200_irises_lilies_87478811.jpg" alt="Irises and Lilies" >
                            <h4>Simply Elegant</h4>
                            <p>From $22.95</p>
                        </a>
                    </li>
                    <li>
                        <a href="arrdetails.php">
                            <img src="img/200_pink_white_daisies_146806077.jpg" alt="Pink and White Mums" >
                            <h4>Blush and Bashful</h4>
                            <p>From $19.95</p>
                        </a>
                    </li>
                    <li>
                        <a href="arrdetails.php">
                            <img src="img/200_tulips_watering_can_155465445.jpg" alt="Tulips in Water Can" >
                            <h4>Morning in the Garden</h4>
                            <p>From $29.95</p>
                        </a>
                    </li>
                    <li>
                        <a href="arrdetails.php">
                            <img src="img/200_birthday_163167595.jpg" alt="Orchid Bouquet" >
                            <h4>Orchids for the Table</h4>
                            <p>From $35.95</p>
                        </a>
                    </li>
                    <li>
                        <a href="arrdetails.php">
                            <img src="img/200_red_yellow_roses_119752732.jpg" alt="Red and Yellow Roses" >
                            <h4>Classic Rose Bouqet</h4>
                            <p>From $49.95</p>
                        </a>
                    </li>
                    <li>
                        <a href="arrdetails.php">
                            <img src="img/200_white_lily_pink_daisy_92493508.jpg" alt="Lilies and Roses" >
                            <h4>Evening Surprise</h4>
                            <p>From $29.95</p>
                        </a>
                    </li>
                    <li>
                        <a href="arrdetails.php">
                            <img src="img/200_carnations_daisies_92007328.jpg" alt="Carnations and Daisies" >
                            <h4>Cheer Up!</h4>
                            <p>From $19.95</p>
                        </a>
                    </li>
                    <li>
                        <a href="arrdetails.php">
                            <img src="img/200_purple_daisy_rose104274224.jpg" alt="Daisy Bouquet" >
                            <h4>Purple Galore</h4>
                            <p>From $21.95</p>
                        </a>
                    </li>
                    <li>
                        <a href="arrdetails.php">
                            <img src="img/200_colorful_gerbera_119722776.jpg" alt="Mixed Gerbera Daisies" >
                            <h4>Dotted Daisies</h4>
                            <p>From $25.95</p>
                        </a>
                    </li>
                    <li>
                        <a href="arrdetails.php">
                            <img src="img/200_yellow_white_mums_147664285.jpg" alt="Daisy Mix" >
                            <h4>Patio Picnicking</h4>
                            <p>From $19.95</p>
                        </a>
                    </li>
                    <li>
                        <a href="arrdetails.php">
                            <img src="img/200_tulips_daffodils2_153986183.jpg" alt="Mixed Tulips" >
                            <h4>Box of Happiness</h4>
                            <p>From $29.95</p>
                        </a>
                    </li>
                    <li>
                        <a href="arrdetails.php">
                            <img src="img/200_butterflies_120624479.jpg" alt="Daisies and Butterflies" >
                            <h4>Bounty of Butterflies</h4>
                            <p>From $25.95</p>
                        </a>
                    </li>
                    <li>
                        <a href="arrdetails.php">
                            <img src="img/200_tulips_irises_121357306.jpg" alt="Irises and Tulips" >
                            <h4>Mardi Gras Mambo</h4>
                            <p>From $29.95</p>
                        </a>
                    </li>
                    <li>
                        <a href="arrdetails.php">
                            <img src="img/200_tulips_daffodils4_160232631.jpg" alt="Mixed Bulbs" >
                            <h4>Cascade of Color</h4>
                            <p>From $32.95</p>
                        </a>
                    </li> -->
                </ul>
            </article>
        </section>
    </main>
    
    <?php include "includes/footer.php" ?>
</body>
</html>