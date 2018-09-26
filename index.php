<html>
	<head>
	<title>Silver Jack</title>
	<style>@import url("css/styles.css");</style>
	</head>
	
	<body>
		<h1>Silver Jack</h1>
		<div id="main">
			<?php
            $suits = array ("spades", "hearts", "clubs", "diamonds");
            $cardNums = array ( "Ace"=>1, "Two"=>2, "Three"=>3, "Four"=>4, "Five"=>5, "Six"=>6, "Seven"=>7, "Eight"=>8, "Nine"=>9, 
	        "Ten"=>10, "Jack"=>11, "Queen"=>12, "King"=>13);
            $deck = array();
            foreach ($suits as $suit) {
                foreach ($cardNums as $card => $value) {
                    $deck[] = array ("card"=>$card, "suit"=>$suit, "value"=>$value);
                }
            }shuffle($deck);
            $hand = array(0 => array(), 1=>array(), 2=>array(), 3=>array());
			$names = array("Bruce", "Hulk", "Jackie", "Lady");
			$totals = array();
			$total = 0;
			
			for ($k = 0; $k < 4; $k++){
				$total = 0;
				$j = rand(1,6);
				for ($i = 0; $i < $j; $i++) {
				    $card = array_pop($deck);
					$total += $card["value"];
				    $hand[$k][] = $card;
				}
				$totals[] = $total;
			}
			$max = 0;
			for($i = 0; $i < 4; $i++){
				while($totals[$i] <= 42 && $totals[$i] > $max){
					$max = $totals[$i];
				}
			}
			
			$forPlayers = glob("players/*.*"); // found this code online
			for ($i=0; $i<count($forPlayers); $i++){ // supposed to display players
				$image=$forPlayers[$i];
				$fileType=array('jpg');
			$ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
				if(in_array($ext, $fileType)) {
					echo '<img src="'.$image.'" alt ="Random image" />'."<br/><br/>";
				}
				else {
					continue;
				}
			}
			for ($k = 0; $k < 4; $k++){
				echo "<div>";
				for ($i = 0; $i < count($hand[$k]); $i++) {
					//code to display cards should go here
				}
				echo $totals[$k];
				if($totals[$k] == $max){
					echo "<div id='winner'>" . $names[$k] . " wins! </div>";
				}
				echo "</div>";
			}
			?>
		</div>
		<footer>
			<p>The END.</p>
		</footer>
	</body>