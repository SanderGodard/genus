<?php
	$_SESSION["email"] = "";
	$_SESSION["password"] = "";
	$email = "";
	$password = "";
	$loggedIn = false;

	$page = "Logged out";
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
		<h1>You have been logged out</h1>
		<p>We hope to see you back soon</p>

	</main>
</body>
</html>
