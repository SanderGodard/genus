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
		include "../elements/php/nav.php";
		include "../elements/php/sidebar.php";
	?>
	<main>
		<div class="edit">
			<?php
				$students = ["Kjetil Olai Bertelsen", "Kjetil Olai Bertelsen", "Kjetil Olai Bertelsen", "Kjetil Olai Bertelsen", "Kjetil Olai Bertelsen", "Kjetil Olai Bertelsen", "Kjetil Olai Bertelsen", "Kjetil Olai Bertelsen", "Kjetil Olai Bertelsen", "Kjetil Olai Bertelsen", "Kjetil Olai Bertelsen", "Kjetil Olai Bertelsen", "Kjetil Olai Bertelsen", "Kjetil Olai Bertelsen", "Kjetil Olai Bertelsen", "Kjetil Olai Bertelsen", "Kjetil Olai Bertelsen", "Kjetil Olai Bertelsen", "Kjetil Olai Bertelsen", "Kjetil Olai Bertelsen"]; // Denne skal også være en SQL query

				echo "<div class='class'>
								<div class='header'>$class</div>
								<div class='students' contenteditable='true'>";
									for ($j=0; $j < count($students); $j++) {
										echo "<p>$students[$j]</p>";
									}
				echo 		"</div>
							</div>";

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
				echo $col;
				$eleverpercol = intval($antall / $col);
				$k = 0;
				if ($antall % $col !== 0) {
					$ekstra = $antall % $col;
					$k = -1;
					// $eleverpercol++;
					// $plasser = $eleverpercol*$col;
					// if ($plasser >= $antall) {}
					// if ($eleverpercol >= $) {}
				}



				echo "<div class='seating'>
								<div class='header'>Current seating</div>
								<div class='seats'>";
						echo "<div class='columns'>";
									for ($i=0; $i < $antall; $i++) {
										if ($k !== 0 && $k == $eleverpercol) {
											echo "</div><div class='columns'>";
											$ekstra--;
											if ($ekstra > 0) {
												$k = -1;
											} else {
												$k = 0;
											}
										}
										echo "<div class='sete' contenteditable='true'>$seating[$i]</div>";
										$k++;
									}
				echo 		"</div>
							</div>
						</div>";
			?>
		</div>
	</main>
</body>
</html>
