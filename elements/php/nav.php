<nav>
  <div>
    <a class="logo" href="../genus">genus</a>
    <a href="myClasses/">My classes</a>
    <div class="dropdown-container">
      <a class="dropdown" href="javascript:void(0)">Modes</a>
      <div class="menu">
        <a href="picker/">Picker</a>
        <a href="order/">Order</a>
        <a href="seating/">Seating</a>
        <a href="quiz/">Quiz</a>
      </div>
    </div>
  </div>
  <?php
    $fname = "Sander";
    $lname = "Godard";
    $pfp = "images/pfp.png";
    if ($loggedIn) {
      echo "<div class='dropdown-container'>
              <a class='profile' href='javascript:void(0)'>
                <span class='dropdown'>$email</span>
                <img src='$pfp' alt='Profile'>
              </a>
              <div class='menu menu2'>
                  <a href='profile/'>Profile</a>
                  <a href='settings/'>Settings</a>
                  <a></a>
                  <a href='logout/'>Log out</a>
              </div>
            </div>";
    } else {
      echo "<div><a class='profile' href='login/'>Log in</a></div>";
    }
   ?>

</nav>
