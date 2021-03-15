<?php
    $error = "";
    $db = new mysqli("localhost","Thomas","d11m03å02","tjbiler");

    if ($db->connect_error) {
       die("Connection to database faild: ". $db->connect_error);
    }

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $sql = "INSERT INTO carv2 (CarName, CarBrand, KMPL, KM, Color, Price, image, described) VALUES ('{$_POST['CarName']}', '{$_POST['CarBrand']}', '{$_POST['KMperL']}', '{$_POST['KM']}', '{$_POST['Color']}', '{$_POST['Price']}', '{$_POST['image']}', '{$_POST['described']}')";
        if ($db->query($sql)) {
            $_SESSION["Login"] = $_POST;
            header("Location: index.php");
        }
        else{
            $error = $db->error;

        }

    }


    


?>
<pre>
    <?php 
        echo $error;
        print_r($_POST);
        print_r($_FILES);
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
<body>
    <div class="back">
        <a href="index.php">&#129092;</a>
    </div>
    <div class="formHolder">
        <div class="loginStyle">
            <form method="post" enctype="mutipart/form-data" action=<?php echo $_SERVER["PHP_SELF"];?>>
                <label for="CarName">Bil navn</label>
                <input type="text" name="CarName" required>
                
                <label for="CarBrand">Bilmærker </label>
                <input type="text" name="CarBrand" required>
                
                <label for="KMperL">KM-L</label>
                <input type="text" name="KMperL" required>
                
                <label for="KM">KM</label>
                <input type="text" name="KM" required>
                
                <label for="Color">Faver</label>
                <input type="text" name="Color" required>

                <label for="Price">Pris</label>
                <input type="text" name="Price" required> 
                
                <label for="image">Billede</label>
                <input type="file" name="image" required>

                <label for="described">beskrevet</label>
                <input type="text" name="described" id="described">
                
                <input type="submit" name="Submit" value="OpretProdukt">
            </form>
        </div>
    </div>
</body>
</html>