<?php
$elever = array("dani", "anders" ,"patrick", "fenris" , "thomas");
$find = "patrick";


$month = array(
    "januar" => 31,
    "februar" => 28,
    "marts" => 31,
    "april" => 30,
    "maj" => 31,
    "juni" => 30,
    "juli" => 31,
    "august" => 31,
    "september" => 30,
    "oktober" => 31,
    "november" => 30,
    "december" => 31
);

function monthLength($month){
    $shortOrLong = [];
    foreach ($month as $key => $value){
        if($value == 31){
            $shortOrLong[1][] = $key;
        }
        else{
            $shortOrLong[0][] = $key;
        }
        
    }
    return $shortOrLong;
};


$laerere = array( 
    array(
    "fornavn" => "Hanne",
    "efternavn" => "Lund", 
    "fag" => "Visualisering" ),
    array(
    "fornavn" => "Jens",
    "efternavn" => "Clausen",
    "fag" => "Softwarekonstruktion"), 
    array(
    "fornavn" => "Ronni",
    "efternavn" => "Hansen",
    "fag" => "Teknik" ),
    array(
    "fornavn" => "Jonas", 
    "efternavn" => "Rasmussen",
    "fag" => "AspIT-Lab" ))


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
    <?php
        function findName($elever,$find){
            foreach ($elever as $key => $value ) {
                if ($value == $find) {
                    return $key;
                }
            }
            return 5;
           
        };
        if (findName($elever,$find) < 5) {
            echo ucfirst($find)." findes i arrayet på plads ".findName($elever,$find);
        } else {
            echo ucfirst($find)." findes ikke i arrayet";
        };
    ?>
    <p>
    <?php
        if (array_search($find,$elever) !== false) {
            echo ucfirst($find)." findes i arrayet på plads ".array_search($find,$elever,false);
        } else {
            echo ucfirst($find)." findes ikke i arrayet";
        };
    ?> 
    </p>
    <div>
        <div>
            <h2>Korte måneder</h2>
            <?php
            $ff = monthLength($month);
            foreach ($ff[0] as $value) {
            echo "<p>".($value)." ".$month[$value]." dage</p>";
            }
            ?>
        </div>
        <div>
            <h2>Lange måneder</h2>
            <?php
            $ff = monthLength($month);
            
            foreach ($ff[1] as $value) {
            echo "<p>".($value)." ".$month[$value]." dage</p>";
            }
            ?>
        </div>
    </div>
    <pre>
        <?php
            print_r($laerere);
            foreach ($laerere as $hverlaerer){
                foreach ($hverlaerer as $key => $value) {
                    echo $value." ";
                    if($key == "fag"){
                        echo "<br>";
                    }
                    
                }
            }
        ?> 
    </pre>
    
</body>
</html>