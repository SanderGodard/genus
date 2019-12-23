<nav>
  <div>
    <a class="logo" href="genus/">genus</a>
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
  <div class="dropdown-container">
    <a class="profile" href="#">
      <?php
        $fname = "Sander";
        $lname = "Godard";
        $pfp = "images/pfp.png";
        echo "<span class='dropdown'>$lname, $fname</span>";
        echo "<img src='$pfp' alt='Profile'>";
       ?>
    </a>
    <div class="menu menu2">
        <a href="profile/">Profile</a>
        <a href="settings/">Settings</a>
        <a></a>
        <a href="logout/">Log out</a>
    </div>
  </div>
</nav>
