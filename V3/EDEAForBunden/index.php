<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
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
        include "includes/TopMenu.php";
        include "includes/SideMenu.php";
    ?>
    <div class="content">
        <header>
            <img src="../EDEA/img/edea-home-of-champions.jpg" alt="edea-home-of-champions">
        </header>
        <main>
            <h1>Edea støvler - høj kvalitet til top præstationer!</h1>
            <P>Kunstskøjteløbere har altid flyttet grænser, og de ønsker den nyeste 
            teknologi til at hjælpe dem med dette. Edea's højt kvalificerede 
            teknikere har fået feedback på, hvilke ønsker og krav skøjteløbere har
            til støvler. Dette, kombineret med den nyeste forskning,
            gør Edeas støvler både revolutionerende og af højeste kvalitet.</P>
            <section>
                <h2>Udvalgte produkter:</h2>
                <div class ="products">
                    <div class = "product">
                        <img src="../EDEA/img/imagecomingsoon.png" alt="imagecomingsoon">
                        <h3>Edea Piano</h3>
                        <p>Antal stjerner:6</p>
                        <p>Beskrivelse:</p>
                        <p>Overture er en kombination af let design og Edea teknologi. Det er den mest solgte Edea støvle. Støvlen har stor støtte og fleksibilitet for kunstskøjteløbere, der arbejder på deres grundløb, enkeltspring og axel.
                            Overture er baseret på vores teknologisk viden om kunstskøjteløb på højt niveau og er baseret på vores passion for kunstskøjteløb.
                            Edea Overture er 100% håndlavet italiensk design. Støvlen er letvægtsdesign, som sikrer god responsivitet. Den giver en god fornemmelse for isen, som gør det lettere at udvikle det grundlæggende skøjteløb.
                        </p>
                        <p>Stivhed: 48</p>
                        <p>Pris: 1175,-</p>
                        <button><a href="#">Køb nu!</a></button>
                    </div>
                    <div class = "product">
                        <img src="../EDEA/img/imagecomingsoon.png" alt="imagecomingsoon">
                        <h3>Edea Piano</h3>
                        <p>Antal stjerner:6</p>
                        <p>Beskrivelse:</p>
                        <p>Overture er en kombination af let design og Edea teknologi. Det er den mest solgte Edea støvle. Støvlen har stor støtte og fleksibilitet for kunstskøjteløbere, der arbejder på deres grundløb, enkeltspring og axel.
                            Overture er baseret på vores teknologisk viden om kunstskøjteløb på højt niveau og er baseret på vores passion for kunstskøjteløb.
                            Edea Overture er 100% håndlavet italiensk design. Støvlen er letvægtsdesign, som sikrer god responsivitet. Den giver en god fornemmelse for isen, som gør det lettere at udvikle det grundlæggende skøjteløb.
                        </p>
                        <p>Stivhed: 48</p>
                        <p>Pris: 1175,-</p>
                        <button><a href="#">Køb nu!</a></button>
                    </div>
                    <div class = "product">
                        <img src="../EDEA/img/imagecomingsoon.png" alt="imagecomingsoon">
                        <h3>Edea Piano</h3>
                        <p>Antal stjerner:6</p>
                        <p>Beskrivelse:</p>
                        <p>Overture er en kombination af let design og Edea teknologi. Det er den mest solgte Edea støvle. Støvlen har stor støtte og fleksibilitet for kunstskøjteløbere, der arbejder på deres grundløb, enkeltspring og axel.
                            Overture er baseret på vores teknologisk viden om kunstskøjteløb på højt niveau og er baseret på vores passion for kunstskøjteløb.
                            Edea Overture er 100% håndlavet italiensk design. Støvlen er letvægtsdesign, som sikrer god responsivitet. Den giver en god fornemmelse for isen, som gør det lettere at udvikle det grundlæggende skøjteløb.
                        </p>
                        <p>Stivhed: 48</p>
                        <p>Pris: 1175,-</p>
                        <button><a href="#">Køb nu!</a></button>
                    </div>
                </div>
            </section>
        </main>
        <?php 
        include "includes/Footer.php";
        ?>
    </div>
</body>
</html>