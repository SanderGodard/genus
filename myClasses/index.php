<?php
	$page = "My classes";
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
		<?php
			echo "<div class='classes' id='Slider'>";
			for ($i=0; $i < count($classes); $i++) {
				$students = ["Kjetil Olai Bertelsen", "Kjetil Olai Bertelsen", "Kjetil Olai Bertelsen", "Kjetil Olai Bertelsen", "Kjetil Olai Bertelsen", "Kjetil Olai Bertelsen", "Kjetil Olai Bertelsen", "Kjetil Olai Bertelsen", "Kjetil Olai Bertelsen", "Kjetil Olai Bertelsen", "Kjetil Olai Bertelsen", "Kjetil Olai Bertelsen", "Kjetil Olai Bertelsen", "Kjetil Olai Bertelsen", "Kjetil Olai Bertelsen", "Kjetil Olai Bertelsen", "Kjetil Olai Bertelsen", "Kjetil Olai Bertelsen", "Kjetil Olai Bertelsen", "Kjetil Olai Bertelsen"]; // Denne skal også være en SQL query

				echo "<div class='class'>
								<div class='header'>$classes[$i]</div>
								<div class='students'>";
									for ($j=0; $j < count($students); $j++) {
										echo "<p>$students[$j]</p>";
									}
				echo 		"</div>
								<div class='fot'>
									<form class='choices' action='javascript:void(0)' method='post'>
										<button name='dele_$classes[$i]' onclick='delClass(" . '"' . $classes[$i] . '"' . ")' type='submit'><img alt='delete' src='images/delete.png'></button>
										<div>
											<button name='dupl_$classes[$i]' onclick='dupClass(" . '"' . $classes[$i] . '"' . ")' type='submit'><img alt='duplicate' src='images/duplicate.png'></button>
											<button name='edit_$classes[$i]' onclick='goto(" . '"' . $classes[$i] . '"' . ")' type='submit'><img alt='edit' src='images/edit.png'></button>
										</div>
									</form>
								</div>
							</div>";

			}
			echo "</div>";
		?>
	</main>
</body>
</html>
