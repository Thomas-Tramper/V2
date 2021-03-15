<pre>
<?php
    if(!isset($_SESSION)) 
    { 
        session_start();
    }
    
    if (isset($_POST["bouquet"])) {
        $_SESSION["Order"] = $_POST; 
    }
    if (isset($_POST["cancel"])) {
        session_unset();
        session_destroy();

        header("Location: index.php");
    }

?>
</pre>
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
        <section>
            <h1>Your Order</h1>
            <p>Please check the details of your order.</p>
            
            <article class="orderdetails">

                <p class="header">&nbsp;</p>
                <p class="header">Item</p>
                <p class="header">Color</p>
                <p class="header">Quantity</p>
                <p class="header">Cost</p>

                <p><img src="img/160_calla_blush_160337318.jpg" alt="Calla Lilies"></p>
                <p><a href="flwrdetails.php" target="_blank">Calla lilies</a></p>
                <p>&nbsp; <?php echo $_SESSION["Order"]["color_Calla_Lilies"]; ?></p>
                <p>&nbsp; <?php echo $_SESSION["Order"]["qty_Calla_Lilies"]; ?></p>
                <p>$<?php echo $_SESSION["Order"]["cost_Calla_Lilies"]*$_SESSION["Order"]["qty_Calla_Lilies"]; ?></p>

                <p><img src="img/160_sunflower_146748795.jpg" alt="Sunflowers"></p>
                <p><a href="flwrdetails.php" target="_blank">Sunflowers</a></p>
                <p>&nbsp;</p>
                <p>&nbsp; <?php echo $_SESSION["Order"]["qty_Sunflowers"]; ?></p>
                <p>$<?php echo $_SESSION["Order"]["cost_Sunflowers"]*$_SESSION["Order"]["qty_Sunflowers"]; ?></p>

                <p><img src="img/160_iris_purple_121549009.jpg" alt="Iris"></p>
                <p><a href="flwrdetails.php" target="_blank">Iris</a></p>
                <p>&nbsp;</p>
                <p>&nbsp;<?php echo $_SESSION["Order"]["qty_Iris"]; ?></p>
                <p>$<?php echo $_SESSION["Order"]["cost_Iris"]*$_SESSION["Order"]["qty_Iris"]; ?></p>

                <p><img src="img/160_alstromeria_87519333.jpg" alt="Peruvian Lilies"></p>
                <p><a href="flwrdetails.php" target="_blank">Peruvian lilies</a></p>
                <p>&nbsp;</p>
                <p>&nbsp;<?php echo $_SESSION["Order"]["qty_Peruvian_Lilies"]; ?></p>
                <p>$<?php echo $_SESSION["Order"]["cost_Peruvian_Lilies"]*$_SESSION["Order"]["qty_Peruvian_Lilies"]; ?></p>

                <p><img src="img/160_daffodil_122442732.jpg" alt="Daffodils"></p>
                <p><a href="flwrdetails.php" target="_blank">Daffodils (Narcissus)</a></p>
                <p>&nbsp;</p>
                <p>&nbsp;<?php echo $_SESSION["Order"]["qty_Daffodils_(Narcissus)"]; ?></p>
                <p>$<?php echo $_SESSION["Order"]["cost_Daffodils_(Narcissus)"]*$_SESSION["Order"]["qty_Daffodils_(Narcissus)"]; ?></p>

                <p><img src="img/160_gerbera_purple_146798391.jpg" alt="Gerbera"></p>
                <p><a href="flwrdetails.php" target="_blank">Gerbera daisies</a></p>
                <p>&nbsp;<?php echo $_SESSION["Order"]["color_Gerbera_Daisies"]; ?></p>
                <p>&nbsp;<?php echo $_SESSION["Order"]["qty_Gerbera_Daisies"]; ?></p>
                <p>$<?php echo $_SESSION["Order"]["cost_Gerbera_Daisies"]*$_SESSION["Order"]["qty_Gerbera_Daisies"]; ?></p>

                <p><img src="img/160_dendrobium2_152158743.jpg" alt="Dendrobium"></p>
                <p><a href="flwrdetails.php" target="_blank">Dendrobium orchids</a></p>
                <p>&nbsp;</p>
                <p>&nbsp;<?php echo $_SESSION["Order"]["qty_Dendrobium_Orchid"]; ?></p>
                <p>$<?php echo $_SESSION["Order"]["cost_Dendrobium_Orchid"]*$_SESSION["Order"]["qty_Dendrobium_Orchid"]; ?></p>

                <p><img src="img/160_rose_red_92974998.jpg" alt="Rose Red"></p>
                <p><a href="flwrdetails.php" target="_blank">Roses</a></p>
                <p>&nbsp;<?php echo $_SESSION["Order"]["color_Roses"]; ?></p>
                <p>&nbsp;<?php echo $_SESSION["Order"]["qty_Roses"]; ?></p>
                <p>$<?php echo $_SESSION["Order"]["cost_Roses"]*$_SESSION["Order"]["qty_Roses"]; ?></p>

                <p><img src="img/160_lily_pink_160102549.jpg" alt="Lily Pink"></p>
                <p><a href="flwrdetails.php" target="_blank">Lilies</a></p>
                <p>&nbsp;<?php echo $_SESSION["Order"]["color_Lilies"]; ?></p>
                <p>&nbsp;<?php echo $_SESSION["Order"]["qty_Lilies"]; ?></p>
                <p>$<?php echo $_SESSION["Order"]["cost_Lilies"]*$_SESSION["Order"]["qty_Lilies"]; ?></p>

                <p><img src="img/160_tulip_purple_160910481.jpg" alt="Tulip Purple"></p>
                <p><a href="flwrdetails.php" target="_blank">Tulips</a></p>
                <p>&nbsp;<?php echo $_SESSION["Order"]["color_Tulips"]; ?></p>
                <p>&nbsp;<?php echo $_SESSION["Order"]["qty_Tulips"]; ?></p>
                <p>$<?php echo $_SESSION["Order"]["cost_Tulips"]*$_SESSION["Order"]["qty_Tulips"]; ?></p>

                <p><img src="img/160_lilac_157045915.jpg" alt="Lilac"></p>
                <p><a href="flwrdetails.php" target="_blank">Lilac</a></p>
                <p>&nbsp;</p>
                <p>&nbsp;<?php echo $_SESSION["Order"]["qty_Lilac"]; ?></p>
                <p>$<?php echo $_SESSION["Order"]["cost_Lilac"]*$_SESSION["Order"]["qty_Lilac"]; ?></p>

                <p><img src="img/160_daisy_white_159207232.jpg" alt="Daisy White"></p>
                <p><a href="flwrdetails.php" target="_blank">Daisies</a></p>
                <p>&nbsp;</p>
                <p>&nbsp;<?php echo $_SESSION["Order"]["qty_Daisies"]; ?></p>
                <p>$<?php echo $_SESSION["Order"]["cost_Daisies"]*$_SESSION["Order"]["qty_Daisies"]; ?></p>
            </article>

            <article class="orderconfirm">
                <form method="post">
                    <input class="btn" value="Cancel Order" name="cancel" id="cancel" type="submit">
                    <input class="btn confirm" value="Confirm Order" type="submit">
                </form>
            </article>
        </section>
    </main>

    <?php include "includes/footer.php" ?>
</body>
</html>