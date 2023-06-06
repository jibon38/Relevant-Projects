<?php

    session_start();
    // Check if the user is not logged in, if not then redirect to login page.
    if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
        header("location: 5.login.php");
        exit;
    }

    require_once "0.connection.php";

    $newPassword = $confirmPassword = "";
    $newPasswordErr = $confirmPasswordErr = "";

    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $newPassword = $_POST['newPassword'];
        $confirmPassword = $_POST['confirmPassword'];

        // ***************  newPassword validation  ***************************

        if (empty($newPassword)) {
           $newPasswordErr = "Enter your password.";
        }
        else if (strlen($newPassword) < 6) {
           $newPasswordErr = "At least 6 chars password.";
        }
        else{
           $password1 = test_input($newPassword);
          if (!preg_match("/^[0-9a-zA-Z-_'@#$%^&*]*/", $password1)) {
                  $newPasswordErr = "Invalid Password Formate.";
          }
        }

        // ***************  confirmPassword validation  ***************************

        if (empty($confirmPassword)) {
           $confirmPasswordErr = "Confirm password.";
        }
        else if (strlen($confirmPassword) < 6) {
           $confirmPasswordErr = "At least 6 chars password.";
        }
        else{
           $password1 = test_input($confirmPassword);
          if (!preg_match("/^[0-9a-zA-Z-_'@#$%^&*]*/", $password1)) {
              $confirmPasswordErr = "Invalid Password Formate.";
          }
          else if (empty($newPasswordErr) && ($newPassword != $confirmPassword))
          {
              $confirmPasswordErr = "Passwords didn't match.";
          }
        }

        // Check input errors before updating the database
        if (empty($newPasswordErr) && empty($confirmPasswordErr)) 
        {
            $sql = "UPDATE register SET password = ? WHERE id = ?";

            if ($stmt = mysqli_prepare($link, $sql)) {
                
                // Bind variables to the prepared statement as parameters
                mysqli_stmt_bind_param($stmt, "si", $param_password, $param_id);

                // Set parameters
                $param_password = password_hash($newPassword, PASSWORD_DEFAULT);
                $param_id = $_SESSION["id"];

                // Attempt to execute the prepared statement
                if(mysqli_stmt_execute($stmt)){
                    // Password updated successfully. Destroy the session, and redirect to login page
                    session_destroy();
                    header("location: 5.login.php");
                    exit();
                } else{
                    echo "Oops! Something went wrong. Please try again later.";
                }

                // Close statement
                mysqli_stmt_close($stmt);
            }
        }

        // Close connection
        mysqli_close($link);
    }

    function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          $data = htmlspecialchars($data);
          return $data;
    }

?>

<!DOCTYPE html>

<html>
<head>
  <title>ZeeStream : The World of Entertainment</title>
  <meta charset="utf-8">
  <meta name="keywords" content="movie, movies, hollywood, actor, actress, cinema, film, trailer.">

  <style type="text/css">
    body {background-color: #1e3d51;
      margin: 0;
      padding: 0;
      overflow-x: hidden;
    }

    .topnav{
        background-color: #27586e;
        margin: 0 auto;
        width: 100%;
        padding: 10px 10px 10px 10px;
        position: relative;
        display: block;
    }

    img{
      width: 140px; height: 210px;
    }
    div{
      margin: 0 auto;
      width: fit-content;
    }
    p{
      font-family: arial;
      font-weight: lighter;
      color: white; font-size: 17px;
    }
    a { color: white; text-decoration: none; }
    a:hover{ color: #00b7eb; }

    hr { border: 1px solid #27586e; margin: 0px;  }

    .dropbtn {}
    .dropdown{position: relative; display: inline-block;}
    .dropdown-content{
      display: none; 
      position: absolute;
      background-color: #27586e;
      min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }
    .dropdown-content a {
      color: black;
      padding: 12px 12px;
        text-decoration: none; font-family: miriam libre;
      display: block;
    }
    .dropdown-content a:hover {background-color: #00b7eb;}
    .dropdown:hover .dropdown-content {display: block;}
    .dropdown:hover .dropbtn {background-color: #27586e;}

    .example{
      display: inline-block; position: relative;
    }
    .example form input[type=text] {
      padding: 10px;
      font-size: 17px;
      border: 1px solid grey;
      width: 280px;
      height: 12px;
      background: white; 
      margin: auto;     
      border-radius: 20px 0px 0px 20px; border-right: none;
    }
    .example2 {
      float: right;
      width: 70px;
      padding: 6px;
      background: #f8f8fc;
      color: black;
      font-size: 17px;
      border: 1px solid grey;
      border-left: none; /* Prevent double borders */
      cursor: pointer;
      border-radius: 0px 20px 20px 0px;
    }

    .topnav2{
        background: #27586e;
        margin: 0 auto;
        width: 100%;
        padding: 18px; margin: 1px;
        position: relative;
        display: block;
    }
    .topnav2 a:hover{ 
      color: #00b7eb;
    }

    .submit{
      border-color: #1e3d51; border-radius: 8px;
      color: #1e3d51;
      float: middle;
      width: 110px; height: 40px; font-size: 17px;
    }
    .submit:hover {
      background-color: #27586e;
      color: white;
    }
    .cancel{
      border-color: #1e3d51; border-radius: 8px;
      color: #1e3d51;
      width: 110px; height: 40px;font-size: 16px; float: middle;
    }
    .cancel:hover{
      background-color: #27586e;
      color: white;
    }

    /* width */
    ::-webkit-scrollbar {
      width: 15px;
    }

    /* Track */
    ::-webkit-scrollbar-track {
      box-shadow: inset 0 0 5px grey; 
      border-radius: 10px;
    }
     
    /* Handle */
    ::-webkit-scrollbar-thumb {
      background: #27586e; 
      border-radius: 10px;
    }

    /* Handle on hover */
    ::-webkit-scrollbar-thumb:hover {
      background: gray; 
    }

    td { 
      font-family: arial;
      width: 300px; font-size: 17px;
      height: 20px;
    }

    .dashboardContent{
      text-align: left; 
      color: black; 
      font-family: arial;
      width: 20px; 
      font-size: 17px;
      padding: 31px; 
      background-color: white;font-weight: bold;
    }
    .dashboardContent2{
      text-align: left; 
      color: black; 
      font-family: arial;
      width: 20px;
      font-size: 17px;
      padding: 31px; 
      background-color: white;font-weight: bold;
    }

    .error1{ color: orange; }

  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<body>

  <nav class="topnav">
      <a href="5.a.loggedin_user.php" style="font-family: miriam libre;font-size: 25px;"> &nbsp;&nbsp;&nbsp;
      ZeeStream </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

      <div class="dropdown">
        <a class="dropbtn" href="" style="font-family: miriam libre;font-size: 17px;"> Movies </a>
        <div class="dropdown-content" style="min-width: 180px;">
          <a href="13.New Releases loggedin.php" style="font-size: 15px; color: white;">New Releases</a>
          <a href="14.all time favourites loggedin.php" style="font-size: 15px; color: white;">All Time Favourites</a>
          <a href="15.most watched loggedin.php" style="font-size: 15px; color: white;">Most Watched</a>
          <a href="16.top tv series loggedin.php" style="font-size: 15px; color: white;">Top TV Series</a>
          <a href="16.animated features loggedin.php" style="font-size: 15px; color: white;">Animated Features</a>
          <a href="17.action movies loggedin.php" style="font-size: 15px; color: white;">Action Movies</a>
          <a href="18.drama and comedy loggedin.php" style="font-size: 15px; color: white;">Drama & Comedy</a>
          <a href="19.disaster movies loggedin.php" style="font-size: 15px; color: white;">Disaster Movies</a>
          <a href="20.monster attacks loggedin.php" style="font-size: 15px; color: white;">Monsters Attack</a>
          <a href="21.scifi movies loggedin.php" style="font-size: 15px; color: white;">Sci-fi & Aliens</a>
          <a href="22.sword movies loggedin.php" style="font-size: 15px; color: white;">Sword & Vangeance</a>
          <a href="23.war movies loggedin.php" style="font-size: 15px; color: white;">War & Espionage</a>
          <a href="24.romance movies loggedin.php" style="font-size: 15px; color: white;">Extreme Romance</a>
          <a href="25.horror movies loggedin.php" style="font-size: 15px; color: white;">Horror & Scary</a>
          <a href="26.award and nominated loggedin.php" style="font-size: 15px; color: white;">Award & Nominated</a>
        </div>
      </div>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

      <div class="dropdown">
        <a href="" style="font-family: miriam libre;font-size: 17px;"> TV series </a>
        <div class="dropdown-content">
          <a href="16.top tv series loggedin.php" style="font-size: 15px; color: white;">Top TV Series</a>
          <a href="35.Netflix Series loggedin.php" style="font-size: 15px; color: white;">Netflix Series</a>
          <a href="" style="font-size: 15px; color: white;">Hulu Original</a>
          <a href="" style="font-size: 15px; color: white;">Apple TV</a>
        </div>
      </div> 
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

      <div class="dropdown">
        <a href="" style="font-family: miriam libre;font-size: 17px;"> MyStream </a>
        <div class="dropdown-content">
          <a href="user_dashboard.php" style="font-size: 15px; color: white;">MyStream Account</a>
        </div>
      </div>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      
      <div class="example">
        <form action="search loggedin.php" method="get" >
            <input type="text" name="search" placeholder=" movies / tv series..">
            <input type="submit" name="submit" value="Search" class="example2"></input>
        </form>
      </div>
      
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      &nbsp;&nbsp;

      <div class = "dropdown">
        <a href="" style="font-family: miriam libre;font-size: 17px;" class="dropbtn">
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
         User </a>

        <div class="dropdown-content">
          <a href="" style="font-size: 15px; color: white;"> 
            <?php
              echo $_SESSION['username'];     // to show the logged in username.
            ?>
          </a>
          <a href="5.b.logout_user.php" style="font-size: 15px; color: white;">Logout</a>
        </div>
      </div>
      
  </nav>

  <h1 style="text-align: center;color: white;font-family: consolas; font-size: 23px;">Password Reset</h1>
  <hr><br><br>

  <div style="float: left; padding-left: 10px;"> 
    <div>
      <nav class="topnav2" style="width: 150px; text-align: left; font-family: arial;">
      <a href="user_dashboard.php" style="font-size: 18px;">Account Overview</a>
      </nav>

      <nav class="topnav2" style="width: 150px; text-align: left; font-family: arial;">
        <a href="11.reset_password2.php" style="font-size: 18px;">Change Password</a>
      </nav>

      <nav class="topnav2" style="width: 150px; text-align: left; font-family: arial;">
        <a href="11.email_verification2.php" style="font-size: 18px; ">Email Verification</a>
      </nav>

      <nav class="topnav2" style="width: 150px; text-align: left; font-family: arial;">
        <a href="5.b.logout_user.php" style="font-size: 18px; ">Sign Out</a>
      </nav>
    </div>
  </div>

  <div>
    <table cellspacing="0px" width="800px;" cellspacing="0px">

      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

        <tr>
          <td class="dashboardContent"><label>New Password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:</label> </td>
          <td class="dashboardContent2" >
            <input type="password" name="newPassword" value="<?php echo $newPassword;?>"  placeholder="new password">
            <span class="error1" style="float: right;"> <?php echo $newPasswordErr;?> </span>
          </td>
        </tr>

        <tr>
          <td class="dashboardContent"><label>Confirm Password :</label> </td>
          <td class="dashboardContent2" >
            <input type="password" name="confirmPassword" value="<?php echo $confirmPassword;?>"  placeholder="confirm password">
            <span class="error1" style="float: right;"> <?php echo $confirmPasswordErr;?> </span>
          </td>
        </tr>
        
        <tr>
          <td class="dashboardContent" style="background-color: #1e3d51;">
            
            <input class="submit" type="submit" name="submit" value="Save"> &nbsp;&nbsp;
            <input class="cancel" type="reset" name="cancel" value="Cancel">
          </td>
        </tr>

      </form>

    </table>
  </div>



  <br> <br> <br><br> <br>
  <br> <br> <br>

  <br><br><br><br><br><br>

  <p style="color: aqua; text-align: center; font-weight: bold; font-size: 15px;">Terms and Conditions | Privacy Rights and Policy | &copy;2021 <span style="font-family: miriam libre;">MovieFlix</span></p>


</body>
</html>