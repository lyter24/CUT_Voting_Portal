<?php
  $PID=$_GET['cid'];
  $conn = mysqli_connect('127.0.0.1','root','','cut_voting');
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
  $query = "DELETE FROM candidate WHERE cand_id='$PID'";
  if ($conn->query($query) === TRUE) {
    header("Location: candidate_dets.php?");
  }else{
    header("Location: candidate_dets.php?Unsuccesfully deleted");
  }
?>