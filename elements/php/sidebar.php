<div class="sidebar">
  <div class="title">
    <?php
      if ($page == "Dashboard") {
        echo "Dash<br>board";
      } elseif (isset($class) && $page == "Edit " . $class) {
        echo $class;
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

        case 'Picker':
          include "side/picker.php";
          break;

        case 'Log in':
          include "side/login.php";
          break;

        case 'Logged out':
          include "side/logout.php";
          break;

        case 'Edit ' . $class:
          include "side/edit.php";
          break;

        default:
          include "side/dashboard.php";
          break;
      }
    ?>

  </div>
</div>
