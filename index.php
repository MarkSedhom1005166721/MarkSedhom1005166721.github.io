<!DOCTYPE html>
<html lang="en">
	<head>
		<script>
		// Water cup game! You have 2 cups one with a size of 5 litres and the other with a size of 3 litres.
		// The goal of the game is to get exactly 4 litres of water in the cup with a size of 5 litres.
		// You can fill the cups, empty them, or pour a cup into the other cup. 
		// You cannot pour more water than a cup can contain, so any excess water stil remains in the original cup. 
		// DO NOT CHANGE BUTTON, FUNCTION, OR EXISTING VARIABLE NAMES. 

		let largeCupQuantity = 0 //quantity in the current large cup 
		let smallCupQuantity = 0 //quantity in the current small cup 

		//Takes in an index of a cup, 0 for large cup, 1 for small cup. 
		//set the image of the cup to its associated water level 
		function setImage(cup){
			//TODO
		}

		//Takes in an index of a cup, 0 for large cup, 1 for small cup. 
		//Pours water into the other cup, set the image, and check if won
		function pourCup(cup){
			//TODO
		}

		//takes the index of the cup, 0 reprenting the large cup, 1 representing the small cup
		//empties the cup, set the image
		function emptyCup(cup){
			//TODO
		}

		//takes the index of the cup, 0 reprenting the large cup, 1 representing the small cup
		//fills the cup to full from its current state, and set the image
		function fillCup(cup){
			//TODO
		}

		// return whether the user has won the game, !!!disable all buttons!!! and have the status div display "You won!"
		// Make sure this is exact, for the automarker. 
		function isWon(){
			//TODO
		}

		</script>
	</head>
	<body>
		<table border="border">
			<tr> <!--Disable all buttons when user has a winning game state -->
				<td><img id="largecup" width="250" height="250" src="imgs/large0.png"  />
					Big Cup, Size 5. 
					<button onclick="pourCup(0)">Pour to other cup</button>
					<button onclick="fillCup(0)">Fill cup</button>
					<button onclick="emptyCup(0)">Empty cup</button>
				</td>
				<td><img id="smallcup" width="250" height="250" src="imgs/small0.png"  />
					Big Cup, Size 3. 
					<button onclick="pourCup(1)">Pour to other cup</button>
					<button onclick="fillCup(1)">Fill cup</button>
					<button onclick="emptyCup(1)">Empty cup</button>   
				</td>
			</tr>
		</table>
		<div id="status"></div> <!--This needs to exactly display "You won!" when the user has a winning game state -->
	</body>
</html>
