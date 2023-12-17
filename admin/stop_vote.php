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
                <a href="candidate_dets.php">
                    <span class="material-icons-sharp">

                        <img src="./../images/dashboard.png"  height ="24" width="24">
                    </span>
                    <h3><b>View Candidates</b></h3>
                </a>
                <a href="reg_fin.php #">
                    <span class="material-icons-sharp">
                        <img src="./../images/database.png"  height ="24" width="24">
                    </span>
                    <h3><b>Registration</b></h3>
                </a>
                <a href="#" class="active">
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
            <h1>Dashboard</h1>
            <h2>** you can start or end elections here.</h2>
            <h3>***</h3>
            <h3>**</h3>
            <h3>*</h3>
            
            <div class="recent-orders">
                <!-- ------------------------------------ -->
                                         
                    <div class="product__dscrptx">
                        <a href="state.php?id=start" class="purchbtn45">
                            Start Voting
                        </a>
                    </div>
                    <h3>***</h3>
                    <div class="product__dscrptx">
                        <a href="state.php?id=end" class="purchbtn45">
                            End Voting
                        </a>
                    </div>

            </div>

        </main>
    </div>

    <script src="./index.js"></script>
</body>

</html>