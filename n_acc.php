<?php
$pass_status="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $reg=$_POST['regnum'];
    $dpt=$_POST['dpt'];
    $yr=$_POST['lvl_yr'];
    $gndr=$_POST['gender'];
    $password=$_POST['password'];
    $password2=$_POST['password2'];

    if (empty($reg) || empty($password)|| empty($password2)) {
        echo "empty data";
    } else {
        if($password != $password2){
            $pass_status="password doesn't match";
        }else{

            $conn = new mysqli('127.0.0.1','root','','cut_voting');
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
            $query = "INSERT INTO users (regnum, password, dpt,gender, level_yr) VALUES ('$reg', '$password', '$dpt', '$gndr', '$yr')";
            if ($conn->query($query) === TRUE) {
                $_SESSION['user']=$row['regnum'];
                header("Location: dashboard.php?login=Successfully Create Account and Logged in");
            }
            else{
              header("Location: n_acc.php?login=Error Account not created");
            }
        }
    }
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
        <h2>Create Account</h2>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <div class="input-field">
                <input type="text" name="regnum" id="regnum"
                    placeholder="Enter your Reg number">
                <div class="underline"></div>
            </div>
            <div class="input-field">
                <input type="password" name="password" id="password"
                    placeholder="Enter your password">
                <div class="underline"></div>
            </div><br>
            <div class="input-field">
                <input type="password" name="password2" id="password2"
                    placeholder="Re-enter your password">
                <div class="underline"></div>                
            </div><br>
            <div class="input-field">
                <input type="text" placeholder="Select your department" disabled>
                    <select name="dpt" id="dpt" class="combobox">
                      <option ></option>
                      <option value="arts">Arts</option>
                      <option value="bzns">Business</option>
                      <option value="eng">Engineering</option>
                    </select>
                <div class="underline"></div>
            </div><br>
            <div class="input-field">
                <input type="text" placeholder="Select your gender" disabled>
                    <select name="gender" id="gender" class="combobox">
                      <option ></option>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                    </select>
                <div class="underline"></div>
            </div><br>
            <div class="input-field">
                <input type="text" placeholder="Select your level year" disabled>
                    <select name="lvl_yr" id="lvl_yr" class="combobox">
                      <option ></option>
                      <option value="1st">1st</option>
                      <option value="2nd">2nd</option>
                      <option value="3rd">3rd</option>
                      <option value="4th">4th</option>
                      <option value="5th">5th</option>
                    </select>
                <div class="underline"></div>
            </div><br>
            <div class="input-field">
                <p style="color:red; font-size: 0.8rem;font-style: italic;"><?php echo($pass_status) ?></p>
            </div>

            <input type="submit" value="Create">
        </form>

        <div class="footer">
            <a href="index.php"><p style="color:#000026;">Back to login</p></a>
            <br>
            <a href="index.php" style="color:#bf0040;text-decoration:none;">Cancel</a>
        </div>
    </main>
</body>
</html>