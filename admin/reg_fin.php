<?php
$filename = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
// if (isset($_POST['upload'])) {

    $name=$_POST['name'];
    $part=$_POST['part'];
    $position=$_POST['position'];
    $level=$_POST['level'];
    $program=$_POST['program'];
    $message=$_POST['message'];    

    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "./gallery/" . $filename;
    $grp="";

    // $user_id = $_SESSION['uid'];

    // $db = mysqli_connect("localhost", "root", "", "gallery");

    if ((strpos($filename, "mp4") !== false) || (strpos($filename, "webm") !== false) ){
        $grp="video";
    }else{
        $grp="picture";
    }

    
    $db = mysqli_connect("localhost", "root", "", "cut_voting");

    $sql = "INSERT INTO candidate (name, position, part, level, program, message, pic) VALUES ('$name', '$position', '$part', '$level', '$program', '$message', '$filename')";
    mysqli_query($db, $sql);
    if (move_uploaded_file($tempname, $folder)) {

        header("location: reg_fin.php?Message=Successfully upload!!".$filename);

    } else {
        header("location: reg_fin.php?Message=Unsuccessfully upload!!");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">    
    <meta http-equiv="Cache-control" content="no-cache">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link rel="shortcut icon" href="./../images/cut_logo.png" type="image">    
    <title>CUT Voting Portal</title>
</head>

<body>
    <div class="container">
        <aside >
            <div class="top">
                <div class="logo">
                    <img src="./../images/cut_logo.png" alt="logo" height="60" width="110">
                    <h2>CUT - <span class="cut_color">Voting Portal</span> </h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">
                        close
                    </span>
                </div>
            </div>



            <div class="sidebar">
                <a href="candidate_dets.php#">
                    <span class="material-icons-sharp">

                        <img src="./../images/dashboard.png"  height ="24" width="24">
                    </span>
                    <h3><b>View Candidates</b></h3>
                </a>
                <a href="reg_fin.php#" class="active">
                    <span class="material-icons-sharp">
                        <img src="./../images/database.png"  height ="24" width="24">
                    </span>
                    <h3><b>Registration</b></h3>
                </a>
                <a href="stop_vote.php #">
                    <span class="material-icons-sharp">
                        <img src="./../images/database.png"  height ="24" width="24">
                    </span>
                    <h3><b>Voting Status</b></h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                        <!-- <img src="./../images/trending_up.png"  height ="24" width="24"> -->
                    </span>
                    <h3><b></b></h3>
                </a>
                <a href="index.php#">
                    <span class="material-icons-sharp">
                        how_to_vote
                    </span>
                    <h3><b>Log Out</b></h3>
                </a>
                <a href="#">
                    <span class="material-icons-sharp">
                       <!-- <img src="./../images/logout.png"  height ="24" width="24"> -->
                    </span>
                    <h3><b></b></h3>
                </a>
            </div>
        </aside>


        <main>
          <section >
            <h1>Dashboard | Upload profile</h1>
            
            <div class="recent-orders">
                
                <section class="product section container" id="trending">

                    <div class="product__tile22">

                    <div id="contentsz" class="collection-card card">
                        <form method="POST" action="" enctype="multipart/form-data" class="formsz contact__form">
                            <div class="contact__inputs">
                                <div class="contact__content">
                                    <input type="text" name = "part" placeholder=" " class="contact__input">
                                    <label for="" class="contact__label">Part</label>
                                </div>
                                <div class="contact__content">
                                    <input type="text" name = "name" placeholder=" " class="contact__input">
                                    <label for="" class="contact__label">Full Name</label>
                                </div>
                                <div class="contact__content">
                                    <input type="text" name = "position" placeholder=" " class="contact__input">
                                    <label for="" class="contact__label">Position</label>
                                </div>
                                <div class="contact__content">
                                    <input type="text" name = "program" placeholder=" " class="contact__input">
                                    <label for="" class="contact__label">Program</label>
                                </div>

                                <div class="contact__content">
                                    <input type="text" name="level" placeholder=" " class="contact__input">
                                    <label for="" class="contact__label">Level</label>
                                </div>

                                <div class="contact__content contact__area">
                                    <textarea name="message" placeholder=" " class="contact__input"></textarea>                              
                                    <label for="" class="contact__label">Contesting Message</label>
                                </div>
                            </div>
                                
                            <div class="form-group">
                                <input class="form-control choosebtn" type="file" name="uploadfile" value="" />
                            </div>
                            <div class="form-group">
                                <button class="purchbtn" type="submit" name="upload">UPLOAD</button>
                            </div>
                        </form>
                    </div>
                    </div>
                </section>
            </div>
          </section>


        </main>
    </div>

    <script src="./index.js"></script>
</body>

</html>