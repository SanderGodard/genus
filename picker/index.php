<?php
	$chosenClass = false;
	$class = "not found";
	if (isset(htmlspecialchars($_GET["class"]))) {
		// code...
		$class = htmlspecialchars($_GET["class"]);
		$chosenClass = true;
	}
	$page = "Picker";
	//
	$title = "genus | $page";
	include "../elements/php/head.php";

?>
<body>
	<?php
		// php logic


	?>
	<?php
		include "../elements/php/nav.php";
		include "../elements/php/sidebar.php";
	?>
	<main>
		<?php
		$students = ["Kjetil", "Fredrik"];
		// $students = ;// sql query da
		include "../elements/php/fraver.php";
		if ($chosenClass) {
			echo "<div class='separate'>";
				echo "<button type='button' onclick='runRNG()'>Pick a student</button>
				<span class='name'>
				</span>";
				echo "<div id='points'>
								<div class='class'>
								  <div class='header'>
								    Points
								  </div>
								  <div class='students'>";
								    for ($i=0; $i < count($students); $i++) {
								      echo "<div id='$i' class='separate'>
								              $students[$i]
								              <div class='add'>
								                <button onclick='min($i)' type='button'>
								                  -
								                </button>
								                <button onclick='add($i)' type='button'>
								                  +
								                </button>
								                <span>
								                  0
								                </span>
								              </div>
								            </div>";
								    }
						echo "</div>
							</div>
						</div>";
					echo "</div>";
		} else {
			echo "<form action='picker' onsubmit='return checkValue();' method='get'>

			<div class='arrow'>
			<select onchange='formSubmit()' required name='class'>
			<option value='0'>Choose class</option>
			<option value='class1'>Class 1</option>
			<option value='class2'>Class 2</option>
			<option value='class3'>Class 3</option>
			</select>
			</div>
			<button type='submit'>Submit</button>
			</form>";
		}
		?>
	</main>
</body>
</html>
