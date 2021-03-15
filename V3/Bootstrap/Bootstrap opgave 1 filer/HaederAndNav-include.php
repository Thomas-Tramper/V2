<?php
  $side = explode("/",$_SERVER['PHP_SELF'])[3];
?>
<header class="mt-5 mb-3 pt-2">
  <img src="images/wisdompetlogo.svg" alt="Wisdom Pet Logo">
</header>
<nav class="position-fixed justify-content-center fixed-top w-100 navbar navbar-light bg-light">
  <ul class="nav">
    <li class="nav-item text-uppercase"><a class="nav-link <?php if($side == "index.php"){echo "font-weight-bold";};?>" href="index.php">forside</a></li>
    <li class="nav-item text-uppercase"><a class="nav-link <?php if($side == "testimonials.php"){echo "font-weight-bold";};?>" href="testimonials.php">testimonials</a></li>
    <li class="nav-item text-uppercase"><a class="nav-link <?php if($side == "doctors.php"){echo "font-weight-bold";};?>" href="doctors.php">doctors</a></li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">TREATMENT</a>
        <div class="dropdown-menu">
            <a class="dropdown-item text-uppercase <?php if($side == "Behavioural.php"){echo "font-weight-bold";};?>" href="Behavioural.php">Behavioural</a>
            <a class="dropdown-item text-uppercase <?php if($side == "inhousediag.php"){echo "font-weight-bold";};?>" href="inhousediag.php">inhousediag</a>
            <a class="dropdown-item text-uppercase <?php if($side == "Surgery.php"){echo "font-weight-bold";};?>" href="Surgery.php">Surgery</a>
        </div>
    </li>
  </ul>
</nav>