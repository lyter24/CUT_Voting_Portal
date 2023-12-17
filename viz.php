<?php
    $conn = mysqli_connect('127.0.0.1','root','','cut_voting');
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    // dpt gender ------------------------------
    $sql="SELECT (gender) as res_a FROM users INNER JOIN voting on voting.regnum=users.regnum WHERE gender='Male'";
    $qresult = $conn->query($sql);
    $piArr = array();    
    if ($qresult->num_rows > 0) {
        while($row = $qresult->fetch_assoc()) {
            if (!in_array($row['res_a'], $piArr)){
                array_push($piArr, $row['res_a']);
                }            
            }
        }
    $s_m = count($piArr);

    $sql="SELECT (dpt) as res_a FROM users INNER JOIN voting on voting.regnum=users.regnum WHERE gender='Female'";
    $qresult = $conn->query($sql);
    $piArr = array();    
    if ($qresult->num_rows > 0) {
        while($row = $qresult->fetch_assoc()) {
            if (!in_array($row['res_a'], $piArr)){
                array_push($piArr, $row['res_a']);
                }            
            }
        }
    $s_f  = count($piArr);


    // dpt year -----------------------------------
    $sql="SELECT (level_yr) as res_a FROM users INNER JOIN voting on voting.regnum=users.regnum WHERE level_yr='1st'";
    $qresult = $conn->query($sql);
    $piArr = array();    
    if ($qresult->num_rows > 0) {
        while($row = $qresult->fetch_assoc()) {
            if (!in_array($row['res_a'], $piArr)){
                array_push($piArr, $row['res_a']);
                }            
            }
        }
    $a_1 = count($piArr);

    $sql="SELECT (level_yr) as res_a FROM users INNER JOIN voting on voting.regnum=users.regnum WHERE level_yr='2nd'";
    $qresult = $conn->query($sql);
    $piArr = array();    
    if ($qresult->num_rows > 0) {
        while($row = $qresult->fetch_assoc()) {
            if (!in_array($row['res_a'], $piArr)){
                array_push($piArr, $row['res_a']);
                }            
            }
        }
    $a_2 = count($piArr);

    $sql="SELECT (level_yr) as res_a FROM users INNER JOIN voting on voting.regnum=users.regnum WHERE level_yr='3rd'";
    $qresult = $conn->query($sql);
    $piArr = array();    
    if ($qresult->num_rows > 0) {
        while($row = $qresult->fetch_assoc()) {
            if (!in_array($row['res_a'], $piArr)){
                array_push($piArr, $row['res_a']);
                }            
            }
        }
    $a_3 = count($piArr);

    $sql="SELECT (level_yr) as res_a FROM users INNER JOIN voting on voting.regnum=users.regnum WHERE level_yr='4th'";
    $qresult = $conn->query($sql);
    $piArr = array();    
    if ($qresult->num_rows > 0) {
        while($row = $qresult->fetch_assoc()) {
            if (!in_array($row['res_a'], $piArr)){
                array_push($piArr, $row['res_a']);
                }            
            }
        }
    $a_4 = count($piArr);

    $sql="SELECT (level_yr) as res_a FROM users INNER JOIN voting on voting.regnum=users.regnum WHERE level_yr='5th'";
    $qresult = $conn->query($sql);
    $piArr = array();    
    if ($qresult->num_rows > 0) {
        while($row = $qresult->fetch_assoc()) {
            if (!in_array($row['res_a'], $piArr)){
                array_push($piArr, $row['res_a']);
                }            
            }
        }
    $a_5 = count($piArr);
    
    // vote /////////////////////////////////////////

    $sql="SELECT (dpt) as res_a FROM users INNER JOIN voting on voting.regnum=users.regnum WHERE dpt='arts'";
    $qresult = $conn->query($sql);
    $piArr = array();    
    if ($qresult->num_rows > 0) {
        while($row = $qresult->fetch_assoc()) {
            if (!in_array($row['res_a'], $piArr)){
                array_push($piArr, $row['res_a']);
                }            
            }
        }
    $a_count = count($piArr);

    $sql="SELECT (dpt) as res_a FROM users INNER JOIN voting on voting.regnum=users.regnum WHERE dpt='bzns'";
    $qresult = $conn->query($sql);
    $piArr = array();    
    if ($qresult->num_rows > 0) {
        while($row = $qresult->fetch_assoc()) {
            if (!in_array($row['res_a'], $piArr)){
                array_push($piArr, $row['res_a']);
                }            
            }
        }
    $b_count = count($piArr);

    $sql="SELECT (dpt) as res_a FROM users INNER JOIN voting on voting.regnum=users.regnum WHERE dpt='eng'";
    $qresult = $conn->query($sql);
    $piArr = array();    
    if ($qresult->num_rows > 0) {
        while($row = $qresult->fetch_assoc()) {
            if (!in_array($row['res_a'], $piArr)){
                array_push($piArr, $row['res_a']);
                }            
            }
        }
    $e_count = count($piArr);

    // dpt reg -------------------------

    $ssql="SELECT COUNT(dpt) as res_e FROM users WHERE dpt='arts'";
    $qresult = $conn->query($ssql);
    $rowq = mysqli_fetch_assoc($qresult); 
    $ac_count = $rowq["res_e"];

    $ssql="SELECT COUNT(dpt) as res_e FROM users WHERE dpt='eng'";
    $qresult = $conn->query($ssql);
    $rowq = mysqli_fetch_assoc($qresult); 
    $ec_count = $rowq["res_e"];

    $ssql="SELECT COUNT(dpt) as res_e FROM users WHERE dpt='bzns'";
    $qresult = $conn->query($ssql);
    $rowq = mysqli_fetch_assoc($qresult); 
    $bc_count = $rowq["res_e"];


    $piArr = array();
    $item= (" Arts:".$ac_count);
    array_push($piArr, $item);
    $item= (" Business:".$bc_count);
    array_push($piArr, $item);
    $item= (" Engineering:".$ec_count);
    array_push($piArr, $item);
    


    $l1=(explode(":", $piArr[0])[0]);
    $d1=(explode(":", $piArr[0])[1]);
    
    $l2=(explode(":", $piArr[1])[0]); 
    $d2=(explode(":", $piArr[1])[1]);
    
    $l3=(explode(":", $piArr[2])[0]);
    $d3=(explode(":", $piArr[2])[1]);

    $piArr = array();
    $item= (" Arts:".$a_count);
    array_push($piArr, $item);
    $item= (" Business:".$b_count);
    array_push($piArr, $item);
    $item= (" Engineering:".$e_count);
    array_push($piArr, $item);
    


    $q1=(explode(":", $piArr[0])[0]);
    $w1=(explode(":", $piArr[0])[1]);
    
    $q2=(explode(":", $piArr[1])[0]); 
    $w2=(explode(":", $piArr[1])[1]);
    
    $q3=(explode(":", $piArr[2])[0]);
    $w3=(explode(":", $piArr[2])[1]);    

    $piArr = array();
    $item= (" Male:".$s_m);
    array_push($piArr, $item);
    $item= (" Female:".$s_f);
    array_push($piArr, $item);
    


    $q21=(explode(":", $piArr[0])[0]);
    $w21=(explode(":", $piArr[0])[1]);
    
    $q22=(explode(":", $piArr[1])[0]); 
    $w22=(explode(":", $piArr[1])[1]);    

    $piArr = array();
    $item= (" 1st:".$a_1);
    array_push($piArr, $item);
    $item= (" 2nd:".$a_2);
    array_push($piArr, $item);
    $item= (" 3rd:".$a_3);
    array_push($piArr, $item);
    $item= (" 4th:".$a_4);
    array_push($piArr, $item);
    $item= (" 5th:".$a_5);
    array_push($piArr, $item);
    


    $qa21=(explode(":", $piArr[0])[0]);
    $wa21=(explode(":", $piArr[0])[1]);
    
    $qa22=(explode(":", $piArr[1])[0]); 
    $wa22=(explode(":", $piArr[1])[1]);

    $qa23=(explode(":", $piArr[2])[0]);
    $wa23=(explode(":", $piArr[2])[1]);
    
    $qa24=(explode(":", $piArr[3])[0]); 
    $wa24=(explode(":", $piArr[3])[1]);

    $qa25=(explode(":", $piArr[4])[0]);
    $wa25=(explode(":", $piArr[4])[1]);
    
    // $conn->close();
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">    
    <meta http-equiv="Cache-control" content="no-cache">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
    <link href="./chartstyles.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
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
                <a href="dashboard.php#" >
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
                <a href="#" class="active">
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
        <section >
            <h1>Visual Statistics</h1>
            <?php 
            $sql  = "SELECT v_state FROM status "; 
                $qresult = $conn->query($sql);
                $row = mysqli_fetch_assoc($qresult); 
                $state = $row["v_state"]; 

                if ($state == 'end'){
                echo('<div class="recent-orders">

            <div class="recent-orders">

                <div class="product__container2 grid">                        
                        <div class="product__tile2xxc">
                            <div class="insights">
                                <div class="expenses">
                                    <span class="material-icons-sharp">
                                        bar_chart
                                    </span>
                                    <div class="middle">');?>
                                    <?php 

                                    echo('    <div class="left">
                                            <h2>Department Registration statistics:</h2>
                                            <h3>Arts:&#160;'.$ac_count.'</h3>
                                            <h3>Business:&#160;'.$bc_count.'</h3>
                                            <h3>Engineering:&#160;'.$ec_count.'</h3>
                                        </div>
                                    
                                    </div>
                                </div>   
                                <!-- <h2>text</h2>            -->
                                    <div class="box">
                                        <canvas id="pie"></canvas>
                                    </div>                        
                            </div>
                            
                        </div>

                </div>

                <div class="product__container2 grid">                        
                        <div class="product__tile2xxc">
                            <div class="insights">
                                <div class="expenses">
                                    <span class="material-icons-sharp">
                                        how_to_vote
                                    </span>
                                    <div class="middle">');?>
                                    <?php 

                                    echo('    <div class="left">
                                            <h2>Department Voting statistics:</h2>
                                            <h3>Arts:&#160;'.$a_count.'</h3>
                                            <h3>Business:&#160;'.$b_count.'</h3>
                                            <h3>Engineering:&#160;'.$e_count.'</h3>
                                        </div>
                                    </div>
                                </div>   
                                <!-- <h2>text</h2>            -->
                                    <div class="box">
                                        <canvas id="ring"></canvas>
                                    </div>                        
                            </div>
                            
                        </div>

                </div>

                <div class="product__container2 grid">                        
                        <div class="product__tile2xxc">
                            <div class="insights">
                                <div class="expenses">
                                    <span class="material-icons-sharp">
                                        man
                                    </span>
                                    <div class="middle">');
                                    ?>
                                    <?php 

                                    echo('    <div class="left">
                                            <h2>Gender Voting statistics:</h2>
                                            <h3>Male:&#160;'.$s_m.'</h3>
                                            <h3>Female:&#160;'.$s_f.'</h3>
                                        </div>
                                    </div>
                                </div>   
                                <!-- <h2>text</h2>            -->
                                    <div class="box">
                                        <canvas id="pie2"></canvas>
                                    </div>                        
                            </div>
                            
                        </div>

                </div>

                <div class="product__container2 grid">                        
                        <div class="product__tile2xxc">
                            <div class="insights">
                                <div class="expenses">
                                    <span class="material-icons-sharp">
                                        calendar_month
                                    </span>
                                    <div class="middle">');
                                    ?>
                                    <?php 

                                    echo('    <div class="left">
                                            <h2>Student Year Voting statistics:</h2>
                                            <h3>1st:&#160;'.$a_1.'</h3>
                                            <h3>2nd:&#160;'.$a_2.'</h3>
                                            <h3>3rd:&#160;'.$a_3.'</h3>
                                            <h3>4th:&#160;'.$a_4.'</h3>
                                            <h3>5th:&#160;'.$a_5.'</h3>
                                        </div>
                                    </div>
                                </div>   
                                <!-- <h2>text</h2>            -->
                                    <div class="box">
                                        <canvas id="ring2"></canvas>
                                    </div>                        
                            </div>
                            
                        </div>

                </div>
            </div> ');}else{
                    echo("<h3>Visuals will be shown after voting ends</h3>");
                }
                                    ?>

        </section>
        </main>
    </div>

    <script src="./index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.5.1/dist/chart.min.js"></script>
    <script>
        var pie= document.getElementById('pie').getContext('2d');
        var pie2= document.getElementById('pie2').getContext('2d');
        var ring = document.getElementById('ring').getContext('2d');
        var ring2 = document.getElementById('ring2').getContext('2d');

        var myChart = new Chart(pie, {
            type: 'pie',
            data: {
                labels: ['<?php echo($l1); ?>', '<?php echo($l2); ; ?>','<?php echo($l3); ?>'],
                datasets: [{
                    label: 'Department Registration Statistics',
                    data: ['<?php echo($d1); ?>', '<?php echo($d2); ; ?>','<?php echo($d3); ?>',],
                    backgroundColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                        ],
                    }]
                },
                options: {
                    responsive: true,
                }
            });

        var myChart = new Chart(pie2, {
            type: 'pie',
            data: {
                labels: ['<?php echo($q21); ?>', '<?php echo($q22); ; ?>'],
                datasets: [{
                    label: 'Gender Voting Statistics',
                    data: ['<?php echo($w21); ?>', '<?php echo($w22); ; ?>'],
                    backgroundColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)'
                        ],
                    }]
                },
                options: {
                    responsive: true,
                }
            });

        var myChart = new Chart(ring, {
            type: 'doughnut',
            data: {
                labels: ['<?php echo($q1); ?>','<?php echo($q2); ?>','<?php echo($q3); ?>'],
                datasets: [{
                    label: 'Department Voting Statistics',
                    data: ['<?php echo($w1); ?>','<?php echo($w2); ?>','<?php echo($w3); ?>'],
                    backgroundColor: [
                        'rgba(255, 206, 86, 1)',
                        'rgba(75, 192, 192, 1)',
                        'rgba(153, 102, 255,1)'
                    ],
                }]
            },
            options: {
                responsive: true,
            }
        });

        var myChart = new Chart(ring2, {
            type: 'doughnut',
            data: {
                labels: ['<?php echo($qa21); ?>','<?php echo($qa22); ?>','<?php echo($qa23); ?>','<?php echo($qa24); ?>','<?php echo($qa25); ?>'],
                datasets: [{
                    label: 'Department Voting Statistics',
                    data: ['<?php echo($wa21); ?>','<?php echo($wa22); ?>','<?php echo($wa23); ?>','<?php echo($wa24); ?>','<?php echo($wa25); ?>'],
                    backgroundColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255,1)'
                    ],
                }]
            },
            options: {
                responsive: true,
            }
        });

    </script>
</body>

</html>