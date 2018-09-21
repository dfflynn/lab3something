<!DOCTYPE html>
<html>
    <head>
        <title>SilverJack </title>
    </head>
    <body>





    <?php
    
    $deck = array("numCards" => 52, "cards" => array());
    
    $deck["cards"][] = array();
    

    
    
    for($t = 1;$t <= 52;$t++) {
        
    if($t <= 13 ) {
        $deck["cards"][$t]["value"] = $t;
        $deck["cards"][$t]["suit"] = "clubs";
    }
    else if($t > 13 && $t <= 26 ) {
        $deck["cards"][$t]["value"] = $t - 13;
        $deck["cards"][$t]["suit"] = "diamonds";
    }
    else if($t > 26 && $t <= 39 ) {
        $deck["cards"][$t]["value"] = $t - 26;
        $deck["cards"][$t]["suit"] = "hearts";
    }
    else if($t > 39 && $t <= 52 ) {
        $deck["cards"][$t]["value"] = $t - 39;
        $deck["cards"][$t]["suit"] = "spades";
    }
    
    
    
        
    
        
    }
    //echo  $deck["cards"][1]["value"];
    printall($deck);
    
    function printall($deckArray) {
        foreach($deckArray['cards'] as $result) {
            echo $result['value'], " ", $result['suit'], '<br>';
        }
    }
    
    
    ?>
        
        
    
    </body>
</html>