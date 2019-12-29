<?php
	$class = $_GET["class"];
	$page = "Edit " . $class;
	$loggedIn = true;
	//
	$title = "genus | $page";
	include "../elements/php/head.php";

?>
<body>
	<?php
		// variables and logic
		$students = ["Kjetil Olai Bertelsen", "Kjetil Olai Bertelsen", "Kjetil Olai Bertelsen", "Kjetil Olai Bertelsen", "Kjetil Olai Bertelsen", "Kjetil Olai Bertelsen", "Kjetil Olai Bertelsen", "Kjetil Olai Bertelsen", "Kjetil Olai Bertelsen", "Kjetil Olai Bertelsen", "Kjetil Olai Bertelsen", "Kjetil Olai Bertelsen", "Kjetil Olai Bertelsen", "Kjetil Olai Bertelsen", "Kjetil Olai Bertelsen", "Kjetil Olai Bertelsen", "Kjetil Olai Bertelsen", "Kjetil Olai Bertelsen", "Kjetil Olai Bertelsen", "Kjetil Olai Bertelsen"]; // Denne skal også være en SQL query

		$seating = $students; //ofc sin egen sql query

		$antall = count($seating);
		$col = 4;
		$query = "SELECT col from classes where class = $class"; // fiks dette
		//$sqlcol = undefined;
		if (isset($sqlcol)) {
			$col = $sqlcol;
		}
		if (isset($_POST["col"])) {
			$col = $_POST["col"];
			// Put in session and wait for apply
		}
		//echo $col;
		$eleverpercol = intval($antall / $col);
		$k = 0;
		$empty = false;
		$ekstra = $antall % $col;
		if ($ekstra !== 0) {
			$eleverpercol++;
		}
		// echo $ekstra;


		if (isset($_POST["showSeating"])) {
			$showseating = $_POST["showSeating"];
			if ($showseating == true) {
				$showseating = false;
			} elseif ($showseating == false) {
				$showseating = true;
			}
		} else {
			$showseating = false;
		}
	?>
	<?php
		include "../elements/php/nav.php";
		include "../elements/php/sidebar.php";
	?>
	<main>
		<div class="edit">
			<?php
				if ($showseating == false) {
					echo "<div class='class'>
					<div class='header'>$class</div>
					<div class='students' contenteditable='true'>";
					for ($i=0; $i < count($students); $i++) {
						echo "<p>$students[$i]</p>";
					}
					echo 		"</div>
					</div>";
				}
				// else {


				echo "<div class='seating'>
								<div class='header'>Current seating</div>
								<div class='seats' style='grid-template: repeat($eleverpercol, 1fr) / repeat($col, 1fr);'>";
								for ($j=0; $j < ($eleverpercol*$col); $j++) {
									if ($j >= $antall) {
										echo "<div class='sete empty' contenteditable='false'>Empty</div>";
									} else {
										echo "<div class='sete' contenteditable='false'>$seating[$j]</div>";
									}
								}
				echo "</div>";
			// }
			?>
		</div>
	</main>
</body>
</html>
