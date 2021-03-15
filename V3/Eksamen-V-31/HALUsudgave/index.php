<?php
    if(!isset($_SESSION)) 
    { 
        session_start();
        $month = date("n");
    }
    $db = new mysqli("localhost","Thomas","d11m03å02","hansel_og_petal");
    if ($db->connect_error) 
    {
        die("Connection to database faild: ". $db->connect_error);
    }

    // dette query select alt fra flowers og order dem efter hvor mange der er solgt af dem og tager de 3 meste solgt 
    $result = $db->query("SELECT * FROM flowers ORDER BY FSold DESC LIMIT 3");
    if ($db->error) 
    {
        echo $db->error;
    }
    else
    {
        while($row = $result->fetch_assoc())
        {
            $flowers[] = $row; 
        }
    }
    // dette query slecat alt fra arrangements og tager 4 random 
    $result = $db->query("SELECT * FROM arrangements ORDER BY RAND() LIMIT 4");
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

    // hvis det er forår   
    if ($month > 3 && $month < 5) 
    {
        $featuredImg = "Feature_spring";

        if ($month == 3) 
        {
            $seasonsImg = "special_mar";
        } 
        elseif ($month == 4) 
        {
            $seasonsImg = "special_apr";
        } 
        else
        {
             $seasonsImg = "special_maj";
        }
            
    }
    // hvis det er sommer
    elseif ($month > 6 && $month < 8) 
    {
        $featuredImg = "Feature_summer";

        if ($month == 6) 
        {
            $seasonsImg = "special_jun";
        } 
        elseif ($month == 7) 
        {
            $seasonsImg = "special_jul";
        } 
        else
        {
            $seasonsImg = "special_aug";
        }
    } 
    // hvis det er efterår
    elseif ($month > 9 && $month < 11) 
    {
        $featuredImg = "Feature_autumn";

        if ($month == 9) 
        {
            $seasonsImg = "special_sep";
        } 
        elseif ($month == 10) 
        {
            $seasonsImg = "special_oct";
        } 
        else
        {
            $seasonsImg = "special_nov";
        }
    }
    // eller er det vinter 
    else 
    {
        $featuredImg = "980_white_rose_mix_166610678";

        if ($month == 12) 
        {
                $seasonsImg = "special_dec";
        } 
        elseif ($month == 1) 
        {
                $seasonsImg = "special_jan";
        } 
        else
        {
                $seasonsImg = "special_feb";
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
            <h1>Beautiful Flowers, Artfully Arranged</h1>
            <article>
                <p class="overlay header">Beautiful arrangements for any occasion</p>
                <p class="overlay price">Starting at $45.95</p>
                <img src="img/<?php echo $featuredImg;?>.jpg" alt="<?php echo $featuredImg; ?>">
            </article>
        </section>

        <section class="popular">
            <article class="products">
                <div class="indexheadline">
                    <h2>Our Most Popular Flowers</h2>
                    <p><a href="bouquet.php">Browse All Fresh Flowers</a></p>
                </div>
                <ul class="indexcontent">
                    <?php 
                        for ($i=0; $i < count($flowers); $i++) {
                            if (isset($flowers[$i]["FImg"])) {
                                $flowerImg = $flowers[$i]["FImg"];
                            }
                            else
                            {
                                $flowerImg = "imagecomingsoon.png";
                            }
                            ?>
                            <li>
                                <a href="#">
                                    <img src="img/<?php echo $flowerImg ?>" alt="<?php echo $flowers[$i]["FAlttext"]; ?>">
                                    <h4>10 <?php echo $flowers[$i]["FName"]; ?></h4>
                                    <p>From $<?php echo $flowers[$i]["FPrice"]*10*0.95; ?></p>
                                </a>
                            </li>
                            <?php
                        }
                    ?>
                    <!-- <li>
                        <a href="#">
                            <img src="img/200_red_yellow_roses_119752732.jpg" alt="Red Yellow Roses Mix">
                            <h4>10 Roses</h4>
                            <p>From $28.50</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="img/200_irises_121549009.jpg" alt="Purple Irises">
                            <h4>10 Irises</h4>
                            <p>From $19.00</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="img/200_golden_tulips_148182635.jpg" alt="Golden Tulips">
                            <h4>10 Tulips</h4>
                            <p>From $19.00</p>
                        </a>
                    </li> -->
                </ul>
            </article>
        </section>
        <section class="bouqets">
            <article class="products">
                <div class="indexheadline">
                    <h2>Bouquets & Arrangements</h2>
                    <p><a href="arrangements.php">Browse All Arrangements</a></p>
                </div>
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
                                <img src="img/<?php echo $BouquetImg ?>" alt="<?php echo $Bouquets[$i]["alt"]?>">
                                <h4><?php echo $Bouquets[$i]["title"]?></h4>
                                <p>From $<?php echo $Bouquets[$i]["price"]?></p>
                            </a>
                            </li>
                            <?php 
                        }
                    ?>
                    <!-- <li>
                        <a href="#">
                            <img src="img/200_bouquet_watering_can_orange_163066621.jpg" alt="Watering Can">
                            <h4>It's Raining Flowers</h4>
                            <p>From $19.95</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="img/200_arrangement_94972439.jpg" alt="Sunflower Bouquet">
                            <h4>Thinking of You</h4>
                            <p>From $35.95</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="img/200_purple_daisy_rose104274224.jpg" alt="Purple Daisy Bouquet">
                            <h4>Purple Galore</h4>
                            <p>From $21.95</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <img src="img/200_arrangement_163066655.jpg" alt="Bucket o' Mums">
                            <h4>Polka Dot Pail</h4>
                            <p>From $25.95</p>
                        </a>
                    </li> -->
                </ul>
            </article>
        </section>
        <section class="specials">
            <article class="products">
                <div class="indexheadline">
                    <h2>Something Special</h2>
                    <p><a href="bouquet.php">Browse All Fresh Flowers</a></p>
                </div>
            
                <ul class="indexcontent">
                    <li>
                        <a href="bouquet.php">
                            <p class="overlay feature">Create Your Own Bouquet</p>
                            <p class="overlay desc">Choose the flowers you want, and our designers will create a custom arrangement! <span class="price">Bouquets from $29.95</span></p>
                            <img src="img/<?php echo $seasonsImg;?>.jpg" alt="Custom Bouquet">
                        </a>
                    </li>
                    <li>
                        <a href="arrangements.php">
                            <p class="overlay feature">Live Plants Keep Giving</p>
                            <p class="overlay price">Starting at $19.95</p>
                            <img src="img/700_2_maidenhair_fern_166585539.jpg" alt="Maidenhair Fern">
                        </a>
                        <a href="arrangements.php">
                            <p class="overlay feature">Seasonal Specials</p>
                            <p class="overlay price">Starting at $24.95</p>
                            <img src="img/700_2_tulip_field_154321412.jpg" alt="Fresh Tulips">
                        </a>
                    </li>
                </ul>
            </article>
        </section>

    </main>
    <?php include "includes/footer.php" ?>
</body>
</html>