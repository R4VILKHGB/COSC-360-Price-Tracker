<?php
session_start();
$_SESSION["Error_login"] = null;
?>
<!DOCTYPE html>
<html>

<?php

$host = "localhost";
                $database = "db_73975104";
                $user = "73975104";
                $password = "73975104";

//$connection = mysqli_connect($host, $user, $password, $database);
$connection = mysqli_connect($host, $user, $password, $database);

$error = mysqli_connect_error();
if($error != null)
{
  $output = "<p>Unable to connect to database!</p>";
  $_SESSION["Error_login"] = $output;
  header('Location: login.php');
  exit();
}
else
{    
    $uname = '';
    $password = '';
    $acctType = 0;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if(isset($_POST["username"])) {
          $uname = trim ($_POST["username"]);
      }
      if(isset($_POST["password"])) {
          $password = trim ($_POST["password"]);
      }
    }

    if (empty($uname) || empty($password)) {
        $output = "<p>ERROR: The form has the following error(s)</p><br>";
        $output .= '<ul>' . "\n";
        
        if (empty($uname)) {
          $output.= "<li>Invalid User Name</li><br>";
        }
        if (empty($password)) {
          $output .= "<li>Invalid Password.</li><br>";
        }
        $output .= '</ul>' . "\n";
        $output .= "Please try again.";
        $_SESSION["Error_login"] = $output;
        header('Location: login.php');
        die();
      } 

    //good connection, so do you thing
    $sql = "SELECT * FROM Users;";

    $results = mysqli_query($connection, $sql);
    
    //and fetch requsults
    $userexists = FALSE;
    $validpwd = FALSE;
    while ($row = mysqli_fetch_assoc($results))
    {
      echo $row['username']." ".$row['password']."<br/>";
      echo $password."<br>";
      echo "Hashed password: ".md5($row['password'])."<br>";
      if (strcmp($row['username'], $uname) == 0) {
        $userexists = TRUE;
        if (strcmp($row['password'], md5($password)) == 0) {
            $validpwd = TRUE;
            $acctType = $row['acctType'];
        }
      }
    }

    if ($userexists) {
        if($validpwd) {
            $_SESSION["currentUser"] = $uname;
            $_SESSION["acctType"] = $acctType;
            echo "<p>The user has a valid account</p>";       
        } else {
            $output = "<p>Invalid Password!</p>";
            $_SESSION["Error_login"] = $output;
            header('Location: login.php');
            exit();
        }
    } else {
        echo "<p>Invalid username</p>";
        $output = "<p>Invalid username</p>";
        $_SESSION["Error_login"] = $output;
        header('Location: login.php');
        exit();
    }

    mysqli_free_result($results);
    mysqli_close($connection);
    $_SESSION["Error_login"] = null;
    header('Location: home.php');
    exit();
}
?>
</html>
