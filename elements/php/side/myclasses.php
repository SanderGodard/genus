<h2>Overview</h2>
<table>
  <tr>
    <td>Classes</td><td><?php $totalClasses = "5"; echo $totalClasses; ?></td>
  </tr>
  <tr>
    <td>Students</td><td><?php $totalStudents = "61"; echo $totalStudents; ?></td>
  </tr>
</table>

<h2>Classes</h2>
<table>
  <?php
    $classes = ["2IKT-SK", "2MUS", "1HASK", "2STA", "2MDD"];
    $students = ["20", "15", "15", "15", "15"]; // Disse er sql queries
    $totalClasses = "5";
    $totalStudents = "61";

    for ($i=0; $i < count($classes); $i++) {
      echo "<tr>
              <td>$classes[$i]</td><td>$students[$i]</td>
            </tr>";
    }
  ?>
</table>

<div class="center">
  <button type="button" class="dark" name="addClass" onclick="addClass()">Add class</button>
</div>
