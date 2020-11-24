<?php 
$string = "the quick brown fox jumped over the lazy dog";
$word = "the";
$email = "halu@aspit.dk"



?>
<!DOCTYPE html>
<html lang="dk">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p><?php echo strtoupper($string)?></p>
<p><?php echo ucfirst($string)?></p>
<p><?php echo ucwords($string)?></p>
<p>
    <?php
        if(strpos($string, $word) !== false ){
            echo "Word Found";
        } else{
            echo "Word Not Found!";
        }
    ?>
</p>
<p>
    <?php
        echo substr($email, 0, strpos($email, "@"));
    ?>
</p>

<p>
    <?php
        function generere($length)
        {
            $data = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz";
            return substr(str_shuffle($data), 0, $length);

        }
        echo generere(10);
    ?>
</p>
<p>
    <?php
        function check_palindrome($string) 
        {
            if ($string == strrev($string))
                return  "dette er et palindrom ord. ".$string;
            else
                return "dette er ikke et palindrom ord";
        }
        echo check_palindrome("den laks skal ned");
    ?>
</p>
    
</body>
</html>