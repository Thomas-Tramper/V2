<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
?>
<nav class= "navTop">
    <div>
        <ul class= "ulTop">
            <li><a href="#"><img src="../../EDEA/img/FacebookIcon-bw.png" alt="Facebook logo"></a></li>
            <li><a href="#"><img src="../../EDEA/img/instagramIcon-bw.png" alt="Instagram logo"></a></li>
            <li><a href="#"><img src="../../EDEA/img/twitterIcon-bw.png" alt="Twitter logo"></a></li>
            <li><a href="#"><img src="../../EDEA/img/youtubeIcon-bw.png" alt="YouTube logo"></a></li>
        </ul>
        <ul class= "ulTop">
            <li>Velkommen, Thomas</li>
            <li><a href="#">Min Konto</a></li>
            <li id= "shopping-cart"><a href="#"><img src="../../EDEA/img/shopping-cart-solid.svg" alt="Shopping-cart"></a></li>
            <li><a href="#">Min Kurv</a></li>
        </ul>
    </div>
</nav>