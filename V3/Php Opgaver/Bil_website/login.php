<pre>
<?php 

    $db = new mysqli("localhost","Thomas","d11m03å02","tjbiler");

    if ($db->connect_error) {
       die("Connection to database faild: ". $db->connect_error);
    }



    $fail = "";
    session_start();
    print_r($_SESSION);
    print_r($_POST);
    

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if (empty($_POST["brugernavn"])) {
            $fail = "du har indtastet forkert brugernavn";
        }
        else{
            $username = "'" .$_POST["brugernavn"]. "'";
            $result = $db->query("SELECT * FROM usersv2 WHERE Username = $username");
            if ($db->error) {
                echo $db->error;
            }
            else{
                $row = $result->fetch_assoc();
               if ($row["Username"] == $_POST["brugernavn"]) {
                    if ($row["Password"] == $_POST["password"]) {
                        $_SESSION["Login"] = $_POST;
                        header("Location: index.php"); 
                    }
                    else{
                        $fail = "du har indtastet forkert password";
                        
                    }
               } 
               else {
                    $fail = "du har indtastet forkert brugernavn";
               }
               
            }
        }
    }
    
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
            <form method="post" action=<?php echo $_SERVER["PHP_SELF"];?>>
                <label for="brugernavn">brugernavn: </label>
                <div class="formStyleToInputAndFail">
                    <input type="text" name="brugernavn">
                    <span><?php if ($fail == "du har indtastet forkert brugernavn") {echo $fail;}?></span>
                </div>
                

                <label for="password">password: </label>
                <input type="text" name="password" >
                <span><?php if ($fail == "du har indtastet forkert password") {echo $fail;}?></span>
                <input type="submit" name="Submit" value="Login">
            </form>
        </div>
    </div>
</body>
</html>