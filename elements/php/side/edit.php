<h2>Overview</h2>
<table>
  <tr>
    <td>Students</td><td><?php echo $antall ?></td>
  </tr>
</table>


<h2>Settings</h2>
<form style="display: flex; flex-direction: column;" action="edit/?class=<?php echo $class; ?>" method="post">
  <button type='button' onclick='delClass("<?php echo $class; ?>")' name='delete'>delete</button>
  <button type='button' onclick='dupClass("<?php echo $class; ?>")' name='makeCopy'>make copy</button>
  <button type='button' onclick='toggleSeating()' name='showSeating'>show seating</button>
</form>

<h2>Columns</h2>
<div class="nrbtn">
  <form>
    <button type='submit' name='col' value='2' formaction='edit/?class=<?php echo $class; ?>' formmethod='post'>2</button>
    <button type='submit' name='col' value='3' formaction='edit/?class=<?php echo $class; ?>' formmethod='post'>3</button>
    <button type='submit' name='col' value='4' formaction='edit/?class=<?php echo $class; ?>' formmethod='post'>4</button>
    <button type='submit' name='col' value='5' formaction='edit/?class=<?php echo $class; ?>' formmethod='post'>5</button>
    <button type='submit' name='col' value='6' formaction='edit/?class=<?php echo $class; ?>' formmethod='post'>6</button>
  </form>
</div>

<div class="center">
  <form action="edit/?class=<?php echo $class; ?>" method="post">
    <button type="submit" formaction="myClasses/" class="dark" name="cancel">cancel</button>
    <button type="button" onclick='apply("<?php echo $class; ?>")' name="applyChanges">apply changes</button>
  </form>
</div>
