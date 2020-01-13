<?php
	$page = "Log in";
	$loginFail = false;
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
		<div class="login">
			<h1>genus</h1>
			<p>A free tool for helping teachers get students engaged</p>
			<?php
				if ($loginFail) {
					echo "<p class='err'>Email or password is incorrect.</p>";
				}
			?>
			<form action="login/" method="post">
				<label for="email">Email
					<input <?php if ($loginFail) {echo "class='err'";} ?> type="email" tabindex="1" autofocus name="email" placeholder="john_smith@genus.com">
				</label>
				<label for="password">Password
					<input <?php if ($loginFail) {echo "class='err'";} ?>  type="password" tabindex="2" name="password" placeholder="Password">
				</label>
				<div>
					<button type="submit" tabindex="3" name="login">Login</button>
					<button type="submit" tabindex="4" class="forgot" formaction="login/forgot/" name="forgot">Forgot password?</button>
				</div>
			</form>
		</div>
	</main>
</body>
</html>
