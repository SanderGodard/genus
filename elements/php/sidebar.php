<div class="sidebar">
  <div class="title">
    <?php
      if ($page == "Dashboard") {
        echo "Dash<br>board";
      } else {
        echo $page;
      }
    ?>
  </div>
  <div class="actions">
    <?php
      switch ($page) {
        case 'Dashboard':
          include "side/dashboard.php";
          break;

        case 'My classes':
          include "side/myclasses.php";
          break;

        case 'Log in':
          include "side/login.php";
          break;

        case 'Logged out':
          include "side/logout.php";
          break;

        default:
          include "side/dashboard.php";
          break;
      }
    ?>

  </div>
</div>
