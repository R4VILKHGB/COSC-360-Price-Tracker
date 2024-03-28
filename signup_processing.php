<?php
session_start();
$_SESSION["Error_reg"] = null;
?>
<!DOCTYPE html>
<html>

<?php

$host = "localhost";
                $database = "db_73975104";
                $user = "73975104";
                $password = "73975104";
/*
$host = "localhost";
$database = "lab9";
$user = "webuser";
$password = "P@ssw0rd";
*/

$connection = mysqli_connect($host, $user, $password, $database);

$error = mysqli_connect_error();
if($error != null)
{
  $output = "<p>Unable to connect to database!</p>";
  $_SESSION["Error_reg"] = $output;
  header('Location: registration.php');
  exit();
}
else
{
    //good connection, so do you thing
    $sql = "SELECT * FROM Users;";

    $results = mysqli_query($connection, $sql);

    $uname = '';
    $email = '';
    $password = '';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if(isset($_POST["username"])) {
          $uname = trim ($_POST["username"]);
      }
      if(isset($_POST["email"])) {
          $email = trim ($_POST["email"]);
      }
      if(isset($_POST["password"])) {
        $password = trim ($_POST["password"]);
      }
  }

  if (empty($uname) || empty($email) || empty($password)) {
    $output = "<p>ERROR: The form has the following error(s)</p><br>";
    $output .= '<ul>';
    
    if (empty($uname)) {
        $output.= "<li>Invalid User Name</li><br>";
    }
    if (empty($email)) {
        $output .= "<li>Invalid Password.</li><br>";
    }
    if (empty($password)) {
        $output .= "<li>Invalid Password.</li><br>";
    }
    $output .= '</ul>';
    $output .= "Please try again.";
    $_SESSION["Error_reg"] = $output;
    header('Location: registration.php');
    die();
  } 

    echo $uname.$email.$password;
    //and fetch requsults
    $userexists = FALSE;
    while ($row = mysqli_fetch_assoc($results))
    {
      echo $row['username']." ".$row['Email']." ".$row['password']."<br/>";
      echo strcmp($row['username'], $uname);
      if ((strcmp($row['username'], $uname) == 0) || (strcmp($row['Email'], $email) == 0)) {
        $userexists = TRUE;
      }
    }
     

    if($userexists) {
        $output = "<p> User already exists with this name and/or email.</p>";
        $_SESSION["Error_reg"] = $output;
        header('Location: registration.php');
        exit();
      
      echo "<p> User already exists with this name and/or email.</p>";
      echo "<a href = \"lab9-1.html\">Return to user entry</a>";
    } else {
      
      //$sql = "INSERT INTO `users` (`username`, `firstName`, `lastName`, `email`, `password`) VALUES
      //('".$uname."', '".$fname."', '".$lname."', '".$email."', '".md5($password)."');";
      $sql = "INSERT INTO `Users` (`username`, `Email`, `password`, `acctType`) VALUES (?, ?, ?, 0);";

      $hashedpwd = md5($password);

      if ($statement = mysqli_prepare($connection, $sql)) {
        mysqli_stmt_bind_param($statement, 'sss', $uname, $email, $hashedpwd);
        
        /*mysqli_stmt_bind_param($statement, 's', $fname);
        mysqli_stmt_bind_param($statement, 's', $lname);
        mysqli_stmt_bind_param($statement, 's', $email);
        mysqli_stmt_bind_param($statement, 's', md5($password));
        */
        mysqli_stmt_execute($statement);
        echo "<p>An account for the user ".$uname." has been created</p>";
        $_SESSION["currentUser"] = $uname;
      }
    }

    mysqli_free_result($results);
    mysqli_close($connection);
    $_SESSION["Error_reg"] = null;
    header('Location: home.php');
    exit();
}
?>
</html>
