<?php
function getAll($conn,$table){
  $sql = "SELECT * FROM $table";
  $result = $conn->query($sql);
  if ($result && $result->num_rows > 0) {
    $results= [];
    while($row = $result->fetch_assoc()) {
      $results[] = $row;
     }
     return $results;
    } elseif ($result) {
     echo "0 results";
    } else {
     echo "query error";
    }
    $conn->close();
}


function removeId($conn,$table,$id,$basepath){
  $sql = "DELETE FROM $table WHERE id = ?";
  $stmt = $conn->prepare($sql);
  $stmt ->bind_param("i",$id);

  $id = $_POST['id'];
  $stmt-> execute();
  if($stmt && $stmt->affected_rows>0){
    header("location:$basepath/index-php.php?roomId = $id");
  } else {
    echo ' non ho cancellato';
  }
    $stmt->close();
    $conn->close();
}


function update($conn,$table,$id){
  $id = $_GET['id'];
  $sql = "SELECT * FROM $table WHERE id = $id";
  $result = $conn->query($sql);
  if ($result && $result->num_rows > 0) {
      $row = $result->fetch_assoc() ;
    } elseif ($result) {
     echo "0 results";
    } else {
     echo "query error";
    }
    $conn->close();
    return $row;

}
