<?php
include __DIR__ . '/partials-2/template/header.php';
include __DIR__ . '/partials-2/update/server.php';
?>
<div class="container">
  <form class="" action="partials-2/update/server-edit.php" method="post">
    <div class="form-group">
      <label for="exampleInputEmail1">numero stanza</label>
      <input type="text" class="form-control" name="roomNumber" id="roomNumber" value="<?php  echo $row['room_number'];?>">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">floor</label>
      <input type="text" class="form-control" name="floor" id="floor" value="<?php  echo $row['floor'];?>">
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">numero letti</label>
      <input type="text" class="form-control" name="beds" id="beds" value="<?php  echo $row['beds'];?>">
    </div>
    <div class="form-group">
      <input type="hidden" class="form-control" name="id" id="numeroLetti" value="<?php  echo $row['id'];?>">
    </div>
    <div class="form-group">
      <input type="submit" class="bg-primary"  value="Modifica">
    </div>

  </form>

</div>
