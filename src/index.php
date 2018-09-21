<!DOCTYPE html>
<html>

<head>
    <meta char="utf-8" />
    
</head>


<body>
    <?php 
    
    $card = array("image" => "../img/scd/mist.png");
    $card["suit"] = "clubs"; 
    $card["value"] = 10;
    
    
    foreach($card as $key => $value) {
        echo "$key: $value";
        echo "<br/>";
    }
    
    $deck = array("numCards" => 52, "cards" => array());
    
    $deck["cards"][] = array();
    $deck["cards"][0]["suit"] = "clubs";
    
    echo $deck["cards"][0]["suit"];
    
    
    
    
    ?>
    
</body>



</html>










































