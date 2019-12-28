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

<div class="center">
  <form action="edit/?class=<?php echo $class; ?>" method="post">
    <textarea style="display: none;" name="names"></textarea>
    <button type="button" class="dark" name="cancel">cancel</button>
    <button type="submit" name="applyChanges">apply changes</button>
  </form>
</div>
