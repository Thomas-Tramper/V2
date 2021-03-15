<?php 
    session_start();
    $error = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $db = new mysqli("localhost","Thomas","d11m03å02","tjbiler");
        if(isset($_POST["confirmDelete"])){
            $username = "'" .$_SESSION["Login"]["brugernavn"]. "'";
            $result = $db->query("SELECT * FROM usersv2 WHERE Username = $username");
            if ($db->error) {
                echo $db->error;
            }
            else
            {
                $row = $result->fetch_assoc();
                if ($row["Username"] == $_SESSION["Login"]["brugernavn"]) {
                    $sql = "DELETE FROM usersv2 WHERE username = {$username}";
                    if ($db->query($sql)) {
                        session_unset();
                        session_destroy();

                        header("Location: index.php");
                    }
                    else{
                        $error = $db->error;
                    }
                } 
                else {
                    $error = "DU ER IKKE LOGIN HVORDAN ER KOMMET HER IND";
                }
            }
        }
    }


?>
<pre>
<?php
    print_r($_SESSION);
    print_r($_POST);
    echo $error;
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
    <main>
        <h4><?php echo $_SESSION["Login"]["brugernavn"] ?></h4>
        <a href="logud.php">log ud</a>
        <form method="post" action=<?php echo $_SERVER["PHP_SELF"];?>>
            <input type="checkbox" name="confirmDelete" value="confirmDelete">
            <label for="confirmDelete">bekræft at du vil Slet</label><br>
            <input type="submit" name="Submit" value="Delete">
        </form>
    </main>
</body>
</html>