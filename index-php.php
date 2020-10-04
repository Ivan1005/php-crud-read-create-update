<?php
include __DIR__ . '/partials-2/template/header.php';
include __DIR__  .'/partials-2/home/server.php';
?>
<body>
  <div class="container">
    <?php if(!empty($_GET['roomId'])) {
      $stanza_cancellata = $_GET['roomId'];?>
    <div class="alert">
      <?php echo "hai cancellato la stanza numero $stanza_cancellata"; ?>
    </div>
  <?php } ?>
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>NUMERO STANZA</th>
          <th>FLOOR</th>
          <th></th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($results as $value) { ?>
        <tr>
          <td><?php echo $value['id'];?></td>
          <td><?php echo $value['room_number'];?></td>
          <td><?php echo $value['floor'];?></td>
          <td><a href="show-php.php?id= <?php echo $value['id']; ?>">view</a></td>
          <td><a href="update.php?id= <?php echo $value['id']; ?>">update</a></td>
          <td>
            <form class="" action="partials-2/delete/server.php" method="post">
              <input type="submit" name="" value="DELETE" class="btn btn-danger">
              <input type="hidden" name="id" value="<?php echo $value['id'];?>">
            </form>
          </td>
        </tr>
      <?php } ?>
      </tbody>
    </table>
  </div>
  <script type="text/javascript" src="js/script.js" charset="utf-8"></script>
</body>
</html>
