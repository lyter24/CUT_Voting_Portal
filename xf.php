<?php
    session_start();
    $conn = mysqli_connect('127.0.0.1','root','','cut_voting');
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
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
    <link rel="shortcut icon" href="images/cut_logo.png" type="image">    
    <title>CUT Voting Portal</title>
</head>

<body>
    <div class="container">
        <aside >
            <div class="top">
                <div class="logo">
                    <img src="images/cut_logo.png" alt="logo" height="60" width="110">
                    <h2>CUT - <span class="cut_color">Voting Portal</span> </h2>
                </div>
                <div class="close" id="close-btn">
                    <span class="material-icons-sharp">
                        close
                    </span>
                </div>
            </div>



            <div class="sidebar">
                <a href="dashboard.php">
                    <span class="material-icons-sharp">

                        <img src="images/dashboard.png"  height ="24" width="24">
                    </span>
                    <h3><b>DashBoard</b></h3>
                </a>
                <a href="gem_test.php #">
                    <span class="material-icons-sharp">
                        <img src="images/database.png"  height ="24" width="24">
                    </span>
                    <h3><b>General</b></h3>
                </a>
                <a href="cand_test.php #">
                    <span class="material-icons-sharp">
                        <img src="images/trending_up.png"  height ="24" width="24">
                    </span>
                    <h3><b>Candidates</b></h3>
                </a>
                <a href="#"  class="active">
                    <span class="material-icons-sharp">
                        how_to_vote
                    </span>
                    <h3><b>Voting</b></h3>
                </a>
                <a href="viz.php #">
                    <span class="material-icons-sharp">
                        <img src="images/insights.png"  height ="24" width="24">
                    </span>
                    <h3><b>Voting Stats</b></h3>
                </a>
                <a href="rv.php #">
                    <span class="material-icons-sharp">
                        <img src="images/breaking_news.png"  height ="24" width="24">
                    </span>
                    <h3><b>Results</b></h3>
                    <div class="message-count">new🔥</div>
                </a>
                <a href="hist.php #">
                    <span class="material-icons-sharp">
                        <img src="images/settings_account8.png"  height ="24" width="24">
                    </span>
                    <h3><b>History</b></h3>
                </a>
                <a href="index.php">
                    <span class="material-icons-sharp">
                       <img src="images/logout.png"  height ="24" width="24">
                    </span>
                    <h3><b>Log out</b></h3>
                </a>
            </div>
        </aside>


        <main>
            <h1>Dashboard</h1>
            <h3>** if it can't display anything here, it means you already voted.</h3>
            
            <?php 

                $sql  = "SELECT v_state FROM status "; 
                $qresult = $conn->query($sql);
                $row = mysqli_fetch_assoc($qresult); 
                $state = $row["v_state"]; 

                if ($state == 'start'){
                echo('<div class="recent-orders">');?>
                    <!-- ------------------------------------ -->
                                                 
                        <?php
                            $sql = "SELECT * FROM voting";
                            $result = $conn->query($sql);   
                            $uid=$_SESSION['user'];
                            $status="";
                            if ($result->num_rows > 0) {
                              while($row = $result->fetch_assoc()) {

                                if (($row['regnum']==$uid) && ($row['position']=="President") ) {
                                    $status="Voted";
                                    break;
                                }

                                }
                            }
                            if($status!="Voted"){
                                echo('<h2>Presidents</h2>
                                          <div class="product__container grid">       ');

                                $sql = "SELECT * FROM candidate";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                  while($row = $result->fetch_assoc()) {
                                    if ($row['position']=="President"){

                                    echo('<div class="product__tile">
                                            <article class="product__card">
                                                <img src="gallery/'.$row['pic'].'" alt="" class="product__img34">
                                                <div class="product__dscrptx">
                                                    <h3 class="product__title">President: '.$row['name'].'</h3>
                                                    <h3 class="product__title">Part: '.$row['part'].'</h3>
                                                    <a href="vt.php?id='.$uid.'&cid='.$row['cand_id'].'&pos='.$row['position'].'" class="purchbtn45">
                                                        VOTE
                                                    </a>
                                                </div>
                                            </article>
                                        </div> '); 
                                    }
                                }
                                }
                                echo(" </div>");
                            }

                        ?>
                   
                    <!-- ------------------------------------ -->
                                                 
                        <?php
                            $sql = "SELECT * FROM voting";
                            $result = $conn->query($sql);   
                            $uid=$_SESSION['user'];
                            $status="";
                            if ($result->num_rows > 0) {
                              while($row = $result->fetch_assoc()) {

                                if (($row['regnum']==$uid) && ($row['position']=="Secretary") ) {
                                    $status="Voted";
                                    break;
                                }

                                }
                            }
                            if($status!="Voted"){
                                echo('<h2>Secretaries</h2>
                                          <div class="product__container grid">       ');

                                $sql = "SELECT * FROM candidate";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                  while($row = $result->fetch_assoc()) {
                                    if ($row['position']=="Secretary"){

                                    echo('<div class="product__tile">
                                            <article class="product__card">
                                                <img src="gallery/'.$row['pic'].'" alt="" class="product__img34">
                                                <div class="product__dscrptx">
                                                    <h3 class="product__title">Secretary: '.$row['name'].'</h3>
                                                    <h3 class="product__title">Part: '.$row['part'].'</h3>
                                                    <a href="vt.php?id='.$uid.'&cid='.$row['cand_id'].'&pos='.$row['position'].'" class="purchbtn45">
                                                        VOTE
                                                    </a>
                                                </div>
                                            </article>
                                        </div> '); 
                                    }
                                }
                                }
                                echo(" </div>");
                            }

                        ?>
                   
                    <!-- ------------------------------------ -->
                                                 
                        <?php
                            $sql = "SELECT * FROM voting";
                            $result = $conn->query($sql);   
                            $uid=$_SESSION['user'];
                            $status="";
                            if ($result->num_rows > 0) {
                              while($row = $result->fetch_assoc()) {

                                if (($row['regnum']==$uid) && ($row['position']=="Treasurer") ) {
                                    $status="Voted";
                                    break;
                                }

                                }
                            }
                            if($status!="Voted"){
                                echo('<h2>Treasurers</h2>
                                          <div class="product__container grid">       ');

                                $sql = "SELECT * FROM candidate";
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                  while($row = $result->fetch_assoc()) {
                                    if ($row['position']=="Treasurer"){

                                    echo('<div class="product__tile">
                                            <article class="product__card">
                                                <img src="gallery/'.$row['pic'].'" alt="" class="product__img34">
                                                <div class="product__dscrptx">
                                                    <h3 class="product__title">Treasurer: '.$row['name'].'</h3>
                                                    <h3 class="product__title">Part: '.$row['part'].'</h3>
                                                    <a href="vt.php?id='.$uid.'&cid='.$row['cand_id'].'&pos='.$row['position'].'" class="purchbtn45">
                                                        VOTE
                                                    </a>
                                                </div>
                                            </article>
                                        </div> '); 
                                    }
                                }
                                }
                                echo(" </div>");
                            }

                        ?>
                   
                    <!-- ------------------------------------ -->
                <?php 
                echo('</div>'); 
                }else{
                    echo("<h3> Voting ended, check results</h3>");
                }
                ?>

        </main>
    </div>

    <script src="./index.js"></script>
</body>

</html>