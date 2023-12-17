<?php 
    header("Refresh: 30");
?>
<?php
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
                <a href="reg_fin.php #">
                    <span class="material-icons-sharp">
                        <img src="images/settings_account8.png"  height ="24" width="24">
                    </span>
                    <h3><b>Registration</b></h3>
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
                <a href="#">
                    <span class="material-icons-sharp">
                       <img src="images/logout.png"  height ="24" width="24">
                    </span>
                    <h3><b>Log out</b></h3>
                </a>
            </div>
        </aside>


        <main>
            <h1>Dashboard |  User Stats </h1>
             <div class="recent-orders">
                <h2>All Admins</h2>
                <?php

                $sql = "SELECT *  FROM candidate";
                $result = $conn->query($sql);
                echo('
                  <table>
                          <thead>
                              <tr>
                                  <th>Cand_Id</th>
                                  <th>Candidate Name</th>
                                  <th>Position</th>
                                  <th>Party</th>
                                  <th>Level</th>
                                  <th>Program</th>
                                  <th>Picture</th>
                                  <th>Action</th>
                                  <th>Action</th>
                              </tr>
                          </thead>

                  ');
                if ($result->num_rows > 0) {
                  while($row = $result->fetch_assoc()) {
                    echo('    
                          <tbody>
                              <tr>
                                  <td>'.$row['cand_id'].'</td>
                                  <td>'.$row['name'].'</td>
                                  <td>'.$row['position'].'</td>
                                  <td>'.$row['part'].'</td>
                                  <td>'.$row['level'].'</td>
                                  <td>'.$row['program'].'</td>
                                  <td>'.$row['pic'].'</td>

                                  <td><a href="edit.php?Action=edit&cid='.$row['cand_id'].'&nme='.$row['name'].'&pos='.$row['position'].'&prt='.$row['part'].'&lvl='.$row['level'].'&prgm='.$row['program'].'&pic='.$row['pic'].'"> <b style="color:blue;">Edit</b></a></td>
                                  
                                  <td><a href="remove.php?Action=delete&cid='.$row['cand_id'].'"><b style="color:red;">Delete</b></a></td>
                              </tr>
                              
                          </tbody>
                      ');
                  }
                  }else 
                  {
                    echo "0 results";
                  }
                  echo("</table>");
                  $conn->close();
                ?>
            </div>

            
        </main>

    </div>

    <script src="./assets/js/index.js"></script>
</body>

</html>