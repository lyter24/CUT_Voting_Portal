<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>log in</title>
  <!-- Favicons -->
  <link href="./assets/images/psf_logo.png" rel="icon">
  <link href="./assets/images/psf_logo.png" rel="apple-touch-icon">  
  <link rel="shortcut icon" href="./assets/images/psf_logo.png" type="image">
  <link href="bootstrap.css" rel="stylesheet">
  
</head>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $cid=$_POST['cid'];
      $nme=$_POST['nme'];
      $pos=$_POST['pos'];
      $lvl=$_POST['lvl'];
      $pic=$_POST['pic'];
      $prgm=$_POST['prgm'];
      $prt=$_POST['prt'];

    if (empty($cid) || empty($nme)) {
        echo "empty data";
    } else {
        $conn = mysqli_connect('127.0.0.1','root','','cut_voting');
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $query = "UPDATE candidate SET name='$nme', position='$pos', part='$prt', program='$prgm', pic='$pic' WHERE cand_id='$cid'";
        if ($conn->query($query) === TRUE) {
          header("Location: candidate_dets.php?Update Successful");
        }else{
          echo("error_log(couldn't update");
        }
    }
} elseif($_SERVER["REQUEST_METHOD"] == "GET"){ 
  $action=$_GET['Action'];
  $cid=$_GET['cid'];
  $nme=$_GET['nme'];
  $pos=$_GET['pos'];
  $lvl=$_GET['lvl'];
  $pic=$_GET['pic'];
  $prgm=$_GET['prgm'];
  $prt=$_GET['prt'];

  }
?>

<body>
<div id="edit-page"> 
    <form class="form-edit" action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" name="editform" id="editform">
      <div class="modal-dialog" style="background-color:white; width: 400px;" aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Edit Information</h4>
          </div>
          <div class="modal-body">
            Name
            <input type="text" name="address" id="address" placeholder="Name" autocomplete="off" class="form-control placeholder-no-fix" required value="<?php echo($nme);?>">
            Party:
            <input type="text" name="class" id="class" placeholder="Party" autocomplete="off" class="form-control placeholder-no-fix" required value="<?php echo($prt);?>">
            Position:
            <input type="text" name="car_size" id="car_size" placeholder="Position" autocomplete="off" class="form-control placeholder-no-fix" required value="<?php echo($pos);?>">
            Level:
            <input type="text" name="max_time" id="max_time" placeholder="Level" autocomplete="off" class="form-control placeholder-no-fix" required value="<?php echo($lvl);?>">
            Program:
            <input type="text" name="amnt_per_hr" id="amnt_per_hr" placeholder="Program" autocomplete="off" class="form-control placeholder-no-fix" required value="<?php echo($prgm);?>">
            Picture:
            <input type="text" name="picture" id="picture" placeholder="Picture Name" autocomplete="off" class="form-control placeholder-no-fix" required value="<?php echo($pic);?>">
          </div>
          <div class="modal-footer">
            <button data-dismiss="modal" class="btn btn-default" type="button"><a href="candidate_dets.php" style="color:red;text-decoration:none;">Cancel</a></button>
            <input  class="btn btn-theme" type="submit" value="Update">
          </div>
        </div>
      </div>
    </form>
  </div>

</body>
</html>
