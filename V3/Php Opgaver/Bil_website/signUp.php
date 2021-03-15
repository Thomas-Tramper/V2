<?php
    session_start();
    $error = "";
    $db = new mysqli("localhost","Thomas","d11m03å02","tjbiler");
    

    if ($db->connect_error) {
        die("Connection to database faild: ". $db->connect_error);
    }

    $land = "Danmark";

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $username = "'" .$_POST["brugernavn"]. "'";
        $result = $db->query("SELECT * FROM usersv2 WHERE Username = $username");
        if ($db->error) {
            die($db->error); 
        }
        else{
            $row = $result->fetch_assoc();
            if ($row["Username"] !== $_POST["brugernavn"]) {
                if ($_POST["password"] === $_POST["GentagPassword"]) {
                    $sql = "INSERT INTO usersv2 (Username, Password, Firstname, Lastname, Address, Country, Email, PhoneNumber) VALUES ('{$_POST['brugernavn']}', '{$_POST['password']}', '{$_POST['fornavn']}', '{$_POST['efternavn']}', '{$_POST['adresse']}', '{$_POST['land']}', '{$_POST['mail-adresse']}', '{$_POST['telefonnummer']}')";
                    if ($db->query($sql)) {
                        $_SESSION["Login"] = $_POST;
                        header("Location: landingSignUp.php");
                    }
                    else{
                        $error = $db->error;

                    }
                    
                } else {
                    $error = "password er ikke ens";
                }
            }
            else{
                $error = "denne bruger er eksisterer";
            }
        }
    }


?>
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
            <form method="post" action=<?php echo $_SERVER["PHP_SELF"]?>>
                <label for="brugernavn">brugernavn: </label>
                <input type="text" id="brugernavn" name="brugernavn" required> 

                <label for="password">password: </label>
                <input type="text" id="password" name="password" required>

                <label for="Gentag password">Gentag password: </label>
                <input type="text" id="GentagPassword" name="GentagPassword" required>

                

                <label for="fornavn">fornavn: </label>
                <input type="text" id="fornavn" name="fornavn">

                <label for="efternavn">efternavn: </label>
                <input type="text" id="efternavn" name="efternavn">

                <label for="adresse">adresse: </label>
                <input type="text" id="adresse" name="adresse">

                <label for="land">land: </label>
                <input type="text" id="land" name="land">

                <label for="mail-adresse">mail-adresse: </label>
                <input type="text" id="mail-adresse" name="mail-adresse" required>
                
                <label for="telefonnummer">telefonnummer: </label>
                <input type="text" id="telefonnummer" name="telefonnummer">
                <?php 
                    if (isset($_POST["telefonnummer"])) {
                        if ($land == $_POST["land"]) {
                            if (strval(strlen($_POST["telefonnummer"]) != 8)) {
                                echo "<p>telefonnummer er ikke dansk </p>";
                            };
                        }
                }
                ?>

                <!-- <label for="køn">køn: </label>
                <input type="text" id="køn" name="køn">
                
                <label for="Alder">Alder: </label>
                <input type="text" id="Alder" name="Alder"> -->

                <input type="submit" value="Submit">
                
            </form>
        </div>
    </div>
    <pre>
        <?php
            print_r($_POST);
            print_r($error);
        ?>
    </pre>
</body>
</html>