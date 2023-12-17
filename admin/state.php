<?php
    $conn = mysqli_connect('127.0.0.1','root','','cut_voting');
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
    
        $id=$_GET['id'];
        $qwe = "UPDATE status SET v_state='$id' ";        
        echo "string";      
        echo $id;
        if ($conn->query($qwe) === TRUE) {        
            
            header("Location: stop_vote.php?voting=Successfully Voted");
        }
        else{
            header("Location: stop_vote.php?voting=Unsuccessfully");
        }
    }
?>