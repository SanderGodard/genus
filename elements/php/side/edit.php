<h2>Overview</h2>
<table>
  <tr>
    <td>Students</td><td><?php $Students = "20"; echo $Students; ?></td>
  </tr>
</table>


<h2>Settings</h2>
<button type='button' name='delete'>delete</button>
<button type='button' name='makeCopy'>make copy</button>
<button type='button' name='showSeating'>show seating</button>

<h2>Columns</h2>
<div class="nrbtn">
  <form><button type='submit' name='col' value='2' formaction='edit/?class=<?php echo $class; ?>' formmethod='post'>2</button></form>
  <form><button type='submit' name='col' value='3' formaction='edit/?class=<?php echo $class; ?>' formmethod='post'>3</button></form>
  <form><button type='submit' name='col' value='4' formaction='edit/?class=<?php echo $class; ?>' formmethod='post'>4</button></form>
  <form><button type='submit' name='col' value='5' formaction='edit/?class=<?php echo $class; ?>' formmethod='post'>5</button></form>
  <form><button type='submit' name='col' value='6' formaction='edit/?class=<?php echo $class; ?>' formmethod='post'>6</button></form>
</div>

<div class="center">
  <form action="edit/?class=<?php echo $class; ?>" method="post">
    <textarea style="display: none;" name="names"></textarea>
    <button type="button" class="dark" name="cancel">cancel</button>
    <button type="submit" name="applyChanges">apply changes</button>
  </form>
</div>
