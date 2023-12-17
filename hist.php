<?php
    $conn = mysqli_connect('127.0.0.1','root','','ps_finder');
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT COUNT(user_id) as total FROM users"; 
    $qresult = $conn->query($sql);
    $row = mysqli_fetch_assoc($qresult); 
    $ucount = $row["total"]; 

    $sql = "SELECT SUM(totalcost) as total FROM purchases"; 
    $qresult = $conn->query($sql);
    $row = mysqli_fetch_assoc($qresult); 
    $pcount = $row["total"];

    $conn->close();
     
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
                <a href="dashboard.php#">
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
                <a href="rv.php #">
                    <span class="material-icons-sharp">
                        <img src="images/breaking_news.png"  height ="24" width="24">
                    </span>
                    <h3><b>Results</b></h3>
                    <div class="message-count">new🔥</div>
                </a>
                <a href="#" class="active">
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
            <h2>Previous Election History</h2>
            
            <div class="recent-orders">

                <div class="product__container2 grid">
                        <div class="product__tile22x">
                            <h2 class="product__title2x">2022 Elections</h2>
                        </div>
                </div>
            </div>
            
            <div class="recent-orders">

                <div class="product__container2 grid">
                        <div class="product__tile22x">
                            <h2 class="product__title2x">2021 Elections</h2>
                        </div>
                </div>
            </div>  

            <a href="db_tables.php">Show All</a>

        </main>
    </div>

    <script src="./index.js"></script>
</body>

</html>