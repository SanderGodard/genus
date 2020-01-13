<?php
	$page = "Dashboard";
	//
	$title = "genus | $page";
	include "elements/php/head.php";

?>
<body>
	<?php
		include "elements/php/nav.php";
		include "elements/php/sidebar.php";
	?>
	<main>
		<form action="../genus/" onsubmit="return checkValue();" method="get">

			<div class="arrow">
				<select required name="class">
					<option value="0">Choose class</option>
					<option value="class1">Class 1</option>
					<option value="class2">Class 2</option>
					<option value="class3">Class 3</option>
				</select>
			</div>


			<div class="modes">
				<div>
					<button type="submit" formaction="picker/">Pick random student</button>
					<span>
						Selects a random student from the chosen class.<br>
						This is an amazing tool for getting students to answer questions, and be more active in the discussions.<br>
						Great for:<br>
						<ul>
							<li>Choosing someone to answer the given question in an inactive class</li>
							<li>Adding suspense and excitement to the lectures</li>
					 </ul>
					</span>
				</div>

				<div>
					<button type="submit" formaction="order/">Students in random order</button>
					<span>
						Spits out all the students in a given class in a random order. <br>
						Great for:<br>
						<ul>
							<li>Choosing who should present first</li>
							<li>This way everyone would have to answer the question eventually, instead of true randomness like the one to the left</li>
						</ul>
					</span>
				</div>

				<div>
					<button type="submit" formaction="seating/">Random seating for class</button>
					<span>
						Choose from a few different seating arrangements. And then this mode will seat the students randomly. This leads to the students getting to know each other. Not the same monotone work-habits.<br>
						Great for:<br>
						<ul>
							<li>Saving time on manually arranging students' seating</li>
							<li>Randomness so the students can't complain</li>
						</ul>
					</span>
				</div>

				<div>
					<button type="submit" formaction="quiz/">Enter pop-quiz mode</button>
					<span>
						Here you can have a few selected students go against each other in answering your questions.<br>
						This can be used both as motivation by getting points, and to get all students engaged in the class, and learn in a fun way.<br>
						We have:
						<ul>
							<li>A point system to keep track</li>
							<li>A built in timer to keep everyone on edge</li>
						</ul>
					</span>
				</div>
			</div>

		</form>

	</main>
</body>
</html>
