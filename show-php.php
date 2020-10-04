<?php
include __DIR__ . '/partials-2/template/header.php';
include __DIR__. '/partials-2/show/server.php';
?>

<body>
  <div class="container">

  <ul class="list-group">

    <li class="list-group-item">ID:<?php echo $row['id'];  ?></li>
    <li class="list-group-item">Numero della stanza:<?php echo $row['room_number'];  ?></li>
    <li class="list-group-item">Piano:<?php echo $row['floor'];  ?></li>
    <li class="list-group-item">Numero di letti:<?php echo $row['beds'];  ?></li>

  </ul>

</div>
</body>
</html>
