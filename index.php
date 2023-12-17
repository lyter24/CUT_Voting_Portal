<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $username=$_POST['username'];
    $password=$_POST['password'];
    $con = mysqli_connect('127.0.0.1','root','','cut_voting');
    $query = "SELECT * from users where regnum ='$username' AND password='$password'";
    $result = mysqli_query($con,$query)or die(mysql_error());
    if(mysqli_num_rows($result) > 0)
    {
         $row = mysqli_fetch_assoc($result);
         $_SESSION['user']=$row['regnum'];
         header("Location: dashboard.php?username=".$row['username']);
    }
    else{
      header("Location: index.php?login=Wrong password or username");
    }
    $con->close();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/1ab94d0eba.js" crossorigin="anonymous"></script>
    <title>CUT Voting Portal</title>
    <link rel="shortcut icon" href="images/cut_logo.png" type="image">   
    <link rel="stylesheet" href="login_style.css?v=<?php echo time(); ?>">
</head>
<body style="opacity: 0.9;">
    <main class="container">
        <h2>Login</h2>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <div class="input-field">
                <input type="text" name="username" id="username"
                    placeholder="Enter Reg Number">
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <input type="password" name="password" id="password"
                    placeholder="Enter Your Password">
                <div class="underline"></div>
            </div>
            <input type="submit" value="Login">
            
        </form>

        <div class="footer">
            <a href="recover_pass.php">Forgot password?</a>
            <div class="social-fields">
                <div class="social-field google">
                    <a href="#">
                        <i class="fab fa-google"></i>
                        Sign in with Google
                    </a>
                </div>
                <div class="social-field facebook">
                    <a href="#">
                        <i class="fab fa-facebook-f"></i>
                        Sign in with Facebook
                    </a>
                </div>
            </div><br>
            <a href="n_acc.php">Create New Account</a>
            <br>
            <a href="index.php?username=" style="color:#bf0040;text-decoration:none;">Cancel</a>
        </div>
    </main>
</body>
</html>