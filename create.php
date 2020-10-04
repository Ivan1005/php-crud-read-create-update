<?php
include __DIR__ . '/partials-2/template/header.php';
 ?>
 <div class="container">
   <form class="" action="partials-2/create/server.php" method="post">
     <div class="form-group">
       <label for="exampleInputEmail1">numero stanza</label>
       <input type="text" class="form-control" name="roomNumber" id="roomNumber" value="">
     </div>
     <div class="form-group">
       <label for="exampleInputEmail1">floor</label>
       <input type="text" class="form-control" name="floor" id="floor" value="">
     </div>
     <div class="form-group">
       <label for="exampleInputEmail1">numero letti</label>
       <input type="text" class="form-control" name="beds" id="beds" value="">
     </div>
     <div class="form-group">
       <input type="submit" class="bg-primary"  value="Insert">
     </div>

   </form>

 </div>
