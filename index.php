<?php
	$page = "Dashboard";
	$title = "genus | $page";
	include "elements/php/head.php";

?>
<body>
	<?php
		$location = $page;
		include "elements/php/nav.php";
		include "elements/php/sidebar.php";
	?>
	<main>

		<div class="arrow">
			<select name="ChooseClass">
				<option value="0">Choose class</option>
				<option value="1">Class 1</option>
				<option value="2">Class 2</option>
				<option value="3">Class 3</option>
			</select>
		</div>


		<div class="modes">

		</div>
	</main>
</body>
</html>
