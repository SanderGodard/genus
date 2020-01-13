<?php
	$class = htmlspecialchars($_GET["class"]);
	$page = "Edit " . $class;
	//
	$title = "genus | $page";
	include "../elements/php/head.php";

?>
<body>
	<?php
		$students = ["Add names here", "Example"]; // Denne skal være sql query
		$seating = $students; // Denne skal fjernes, må bare være her for testing


		if (isset(htmlspecialchars($_POST["apply"]))) {
			// print_r($_SESSION);
			// Fungerer ikke som session, må mellomlagres i form.
			$students = htmlspecialchars($_POST["names"]);
			$seating = htmlspecialchars($_POST["seats"]);
			// echo "str" . $students;
			// echo "<br>" . $seating;

			$students = explode(",", $students);
			$seating = explode(",", $seating);
			$arr = [];
			$arr2 = [];
			for ($i=0; $i < count($students); $i++) {
				$students[$i] = str_replace("<br>", "", $students[$i]);
				$students[$i] = str_replace("nbsp;", "", $students[$i]);
				$students[$i] = str_replace("amp;", "", $students[$i]);
				$students[$i] = str_replace("&", "", $students[$i]);
				if ($students[$i] !== "") {
					$arr[$i] = $students[$i];
				}
			}
			for ($i=0; $i < count($seating); $i++) {
				$seating[$i] = str_replace("<br>", "", $seating[$i]);
				$seating[$i] = str_replace("nbsp;", "", $seating[$i]);
				$seating[$i] = str_replace("amp;", "", $seating[$i]);
				$seating[$i] = str_replace("&", "", $seating[$i]);
				if ($seating[$i] !== "") {
					$arr2[$i] = $seating[$i];
				}
			}

			$students = $arr;
			$seating = $arr2;
			shuffle($seating);
			// insert into db

		}



		$antall = count($seating);
		$col = 4;
		$eleverpercol = intval($antall / $col);
		$k = 0;
		$empty = false;
		$ekstra = $antall % $col;
		if ($ekstra !== 0) {
			$eleverpercol++;
		}
		// echo $ekstra;


	?>
	<?php
		include "../elements/php/nav.php";
		include "../elements/php/sidebar.php";
	?>
	<main>
		<div class="edit">
			<?php
				echo "<div class='class'>
				<div class='header'>$class</div>
				<div class='students' onkeyup='listClean()' contenteditable='true'>";
				for ($i=0; $i < count($students); $i++) {
					echo "<div>$students[$i]</div>";
				}
				echo 		"</div>
				</div>";
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
