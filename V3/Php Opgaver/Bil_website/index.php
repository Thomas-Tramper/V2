<?php 
    session_start();
    $time = date("i");
    $month = date("n");
    
    $db = new mysqli("localhost","Thomas","d11m03å02","tjbiler");

    if ($db->connect_error) {
        die("Connection to database faild: ". $db->connect_error);
    }
    $result = $db->query("SELECT * FROM carv2 ");
    if ($db->error) {
        echo $db->error;
    }
    else{
        
        while($row = $result->fetch_assoc())
        {
           $Biler[] = $row; 
        }
    }


?>
<pre>
    <?php
        print_r($Biler);
    
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
<body class="<?php if (($time%2) == 0){echo "light";} else {echo "dark";}?>">
    <header>
     <!-- <img src="<?php if (($month) >= 6){echo "Biler udredigeret/faqheader2.jpg";} else {echo "Biler udredigeret/header.jpg";} ?>" alt="Header"> -->
    </header>
    <nav>
        <ul>
            <?php 
                if (isset($_SESSION["Login"])) {
                    ?>
                    <li><a href="MinKonto.php">Min Konto</a></li>
                    <li><a href="opretProdukt.php">Opret Produkt</a></li><?php  
                }
                else {
                    ?> <li><a href="signUp.php">Tilmeld</a></li>
                   <li><a href="login.php">Login</a></li><?php
                };
            ?>   
            
            
            
           
            
        </ul>
    </nav>
    <main>
        <article>
            <?php 
                foreach ($Biler as $Bil) {
                    ?><pre>
                        
                        <?php
                        print_r($Bil);
                        ?> 
                    </pre>
                    <>
                    <?php
                    foreach ($Bil as $key => $value) {  
                        if ($key == "image") {
                            echo "<img src='$value' alt=''>";
                        }
                        echo "<li> $key : $value </li>";
                    }
                    echo "</ul>";
                }
            ?>
        </article>
    </main>
    <!-- <footer>
        <section></section>
        <section></section>
        <section>
            <form method="post" action="newspaper.php">
                <label for="FirstName">First name: </label>
                <input type="text" id="FirstName" name="FirstName" required>
                <label for="LastName">Last name: </label>
                <input type="text" id="LastName" name="LastName" required>
                <label for="email">Email: </label>
                <input type="text" id="Email" name="Email" required>
                <input type="submit" value="Submit">
            </form>
        </section>
    </footer> -->
</body>
</html>