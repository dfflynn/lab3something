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
			$players = array("Bruce", "Hulk", "Jackie", "Lady");
			$scores = array();
			$score = 0;
			
			for ($k = 0; $k < 4; $k++){
				$score = 0;
				$j = mt_rand(6,6);
				for ($i = 0; $i < $j; $i++) {
				    $card = array_pop($deck);
					$score += $card["value"];
				   // $hand[$k] = $card;
				    array_push($hand[$k],$card);
				}
				//$scores[] = $score;
				array_push($scores,$score);
			}
			$max = 0;
			for($i = 0; $i < 4; $i++){
				while($scores[$i] <= 42 && $scores[$i] > $max){
					$max = $scores[$i];
				}
			}
			echo "<span>";
			$forPlayers = glob("players/*.*"); // found this code online
			for ($i=0; $i<count($forPlayers); $i++){ // supposed to display players
				$image=$forPlayers[$i];
				$fileType=array('jpg');
			$ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
				if(in_array($ext, $fileType)) {
					echo '<img src="'.$image.'". alt ="player". />'."<br/><br/>";
				}
				else {
					continue;
				}
			}
			echo "</span>";
			for ($k = 0; $k < 4; $k++){
				echo "<div>";
				for ($i = 0; $i < count($hand[$k]); $i++) {
					//echo "<img src='cards/'".$hand[$k][$i].".jpg'>";
					//echo "<img src='cards/'".'$hand[$k][$i]'.".'png'>";
					//echo "<img src='cards/.png'>";
					echo "<img src='cards/'".'hand[$k]'.".'png'>";
					//echo "hello";
					//echo "<div>";
					//echo "<img src = 'players/".$k.".jpg'>";
					//echo "<img src = 'cards/clubs".$k.".jpg".$i.".png'>";
					//echo "<img src = 'players/".$k.".jpg'>";
					//echo "</div>";
				}
				echo $scores[$k];
				if($scores[$k] == $max){
					echo "<div id='winner'>" . $players[$k] . " wins! </div>";
					//echo $players[$k].$scores[$k]+$scores[$k];
				}
				echo "</div>";
			}
			?>
		</div>
		<footer>
			<a href="index.php" ><button>Play Again</button></a>
			<p>The END</p>
			<p>Created by: Michael Avalos-Garcia & David Flynn</p>
		</footer>
	</body>