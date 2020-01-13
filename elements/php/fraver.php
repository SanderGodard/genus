<div class="modalWrappers" id="fraver">
  <div class="bg" onclick="absenceToggle()"></div>
  <div class="modal">
    <div class="class">
      <div class="header">
        Absence
      </div>
      <div class="students">
        <?php
          for ($i=0; $i < count($students); $i++) {
            echo "<button type='button'>$students[$i]</button>";
          }
        ?>
      </div>
    </div>
  </div>
</div>

<?php
if (isset($class)) {
} else {
echo '<div class="modalWrappers" id="points">
  <div class="bg" onclick="pointsToggle()"></div>
  <div class="modal">
    <div class="class">
      <div class="header">
        Points
      </div>
      <div class="students">';
          for ($i=0; $i < count($students); $i++) {
            echo "<div id='$i' class='separate'>
                    $students[$i]
                    <div class='add'>
                      <button onclick='min($i)' type='button'>
                        -
                      </button>
                      <button onclick='add($i)' type='button'>
                        +
                      </button>
                      <span>
                        0
                      </span>
                    </div>
                  </div>";
          }

      echo '</div>
    </div>
  </div>
</div>';
}
?>
