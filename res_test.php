<?php
    $conn = mysqli_connect('127.0.0.1','root','','cut_voting');
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT  * FROM results INNER JOIN candidate on results.cand_id=candidate.cand_id";
    #$sql = "SELECT * FROM results";
    $result = $conn->query($sql);     
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
    <title>CUT Voting POrtal</title>
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
                <a href="dashboard.php" >
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
                <a href="xf.php #">
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
                <a href="reg_fin.php #">
                    <span class="material-icons-sharp">
                        <img src="images/settings_account8.png"  height ="24" width="24">
                    </span>
                    <h3><b>Registration</b></h3>
                </a>
                <a href="#" class="active">
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
                <a href="#">
                    <span class="material-icons-sharp">
                       <img src="images/logout.png"  height ="24" width="24">
                    </span>
                    <h3><b>Log out</b></h3>
                </a>
            </div>
        </aside>


        <main>
            <h1>Dashboard</h1>
            <h2>All Candidates</h2>

            <?php
            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                echo('<div class="recent-orders">

                <div class="product__container2 grid">
                        <div class="product__tile">
                            <article class="product__card">
                                <img src="gallery/'.$row['pic'].'" alt="" class="product__img" height="200" width="150">
                                <div class="product__dscrpt">
                                    <h3 class="product__title">'.$row['position'].':&#160;'.$row['name'].'</h3>
                                    <h3 class="product__title">Part: '.$row['part'].'</h3>
                                </div>
                            </article>
                        </div>
                        <div class="product__tile2">
                            <div class="insights">
                                <div class="expenses">
                                    <span class="material-icons-sharp">
                                        how_to_vote
                                    </span>
                                    <div class="middle">
                                        <div class="left">
                                            <h3>Total Votes:</h3>
                                            <h1>'.$row['votes'].'</h1>
                                        </div>
                                    </div>
                                </div>

                                <div class="expenses">
                                    <span class="material-icons-sharp">
                                        bar_chart
                                    </span>
                                    <div class="middle">
                                        <div class="left">
                                            <h3>Statistic</h3>
                                            <h3>Arts:&#160;<?php echo(($pcount)); ?> </h3>
                                            <h3>Business:&#160;<?php echo(($pcount)); ?> </h3>
                                            <h3>Engineering:&#160;4232 </h3>
                                        </div>
                                    </div>
                                </div>
                            <h3 class="product__title">President: Mathew Moyo Identify color from several color palettes. The app database contains more than 1000+ entries from the most famous color palettes.</h3>
                            </div>
                        </div>
                </div>
            </div>');
                }
            } ?>

            <a href="db_tables.php">Show All</a>

        </main>
    </div>

    <script src="./index.js"></script>
</body>

</html>