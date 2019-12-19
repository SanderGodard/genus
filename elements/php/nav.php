<nav>
  <div>
    <a class="logo" href="index.php">genus</a>
    <a href="myClasses/">My classes</a>
    <div class="dropdown-container">
      <a class="dropdown" href="modes/">Modes</a>
      <div class="menu">
        <a href="picker/">Picker</a>
        <a href="order/">Order</a>
        <a href="seating/">Seating</a>
        <a href="quiz/">Quiz</a>
      </div>
    </div>
  </div>
  <div>
    <a class="profile" href="profile/">
      <?php
        $fname = "Sander";
        $lname = "Godard";
        $pfp = "images/favicon.png";
        echo "<span class='dropdown'>$lname, $fname</span>";
        echo "<img src='$pfp' alt='Profile'>";
       ?>
    </a>
  </div>
</nav>
