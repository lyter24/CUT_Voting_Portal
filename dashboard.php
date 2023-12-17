<?php
header("Refresh: 30"); 
?>

<?php
    $conn = mysqli_connect('127.0.0.1','root','','cut_voting');
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    $sql  = "SELECT COUNT(regnum) as total FROM users"; 
    $qresult = $conn->query($sql);
    $row = mysqli_fetch_assoc($qresult); 
    $ucount = $row["total"]; 


    $sql  = "SELECT regnum FROM voting"; 
    $qresult = $conn->query($sql);
    $piArr = array();    
    if ($qresult->num_rows > 0) {
        while($row = $qresult->fetch_assoc()) {
            if (!in_array($row['regnum'], $piArr)){
                array_push($piArr, $row['regnum']);
                }            
            }
        }
    $vb=count($piArr);
     
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
                <a href="#" class="active">
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
                <a href="hist.php #">
                    <span class="material-icons-sharp">
                        <img src="images/settings_account8.png"  height ="24" width="24">
                    </span>
                    <h3><b>History</b></h3>
                </a>
                <a href="index.php#">
                    <span class="material-icons-sharp">
                       <img src="images/logout.png"  height ="24" width="24">
                    </span>
                    <h3><b>Log out</b></h3>
                </a>
            </div>
        </aside>


        <main>
            <h1>Dashboard</h1>
            
            <div class="insights">
                <div class="sales">
                    <span class="material-icons-sharp">
                        analytics
                    </span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Registered Students</h3>
                            <h1><?php echo($ucount); ?></h1>
                        </div>
                    </div>
                </div>

                 <div class="income">
                    <span class="material-icons-sharp">
                        stacked_line_chart
                    </span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Voted Students</h3>
                            <h1><?php echo($vb); ?></h1>
                        </div>
                    </div>
                </div>

                <div class="expenses">
                    <span class="material-icons-sharp">
                        bar_chart
                    </span>
                    <div class="middle">
                        <div class="left">
                            <h3>Total Contesting Positions</h3>
                            <h1>3</h1>
                        </div>
                    </div>
                </div>              
            </div>

            <div class="recent-orders">
                <h2>Top Voted Candidates</h2>
                <?php 

                $sql  = "SELECT v_state FROM status "; 
                $qresult = $conn->query($sql);
                $row = mysqli_fetch_assoc($qresult); 
                $state = $row["v_state"]; 

                if ($state == 'end'){
                    echo('<div class="product__container grid">');
                    $sql = "SELECT * FROM results INNER JOIN candidate ON candidate.cand_id = results.cand_id ORDER BY votes DESC LIMIT 3";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                      while($row = $result->fetch_assoc()) {
                        echo('<div class="product__tile">
                                <article class="product__card">
                                    <img src="gallery/'.$row['pic'].'" alt="" class="product__img34">
                                    <div class="product__dscrptx">
                                        <h3 class="product__title">'.$row['position'].': '.$row['name'].'</h3>
                                        <h3 class="product__title">Part: '.$row['part'].'</h3>
                                        <h2>&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;&#160;Votes: '.$row['votes'].'</h2>
                                    </div>
                                </article>
                            </div> '); 
                                }
                            }
                    echo('</div>');
                }else{
                    echo("<h3>Result will be shown after voting ends</h3>");
                }
                
                
                ?>

            </div>

        </main>
    </div>

    <script src="./index.js"></script>
</body>

</html>