<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, intial-scale=1.0">
<title>Administrator Portal</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/styles_about.css">
</head>

<body>
    <?php
        include 'navbar.php';
    ?>
    <div class="container">
        <table>
            <tr><th>Username</th><th>Email</th><th>User Type</th></tr>
            <?php

                $host = "localhost";
                $database = "db_73975104";
                $user = "73975104";
                $password = "73975104";

                $connection = mysqli_connect($host, $user, $password, $database);

                $error = mysqli_connect_error();
                if($error != null)
                {
                echo "<p>Unable to connect to database!</p>";
                }
                else
                {
                    //good connection, so do you thing
                    $sql = "SELECT * FROM users;";

                    $results = mysqli_query($connection, $sql);

                    $deluser = "";

                    if(isset($_GET["delete"])) {
                        $deluser = $_GET['delete'];
                    }

                    $validdeluser = FALSE;

                    while ($row = mysqli_fetch_assoc($results))
                    {
                        if (strcmp($row['username'], $deluser) == 0) {
                            $sql_del = "DELETE FROM users WHERE username = ?;";
                            if ($statement = mysqli_prepare($connection, $sql_del)) {
                                mysqli_stmt_bind_param($statement, 's', $deluser);
                                
                                mysqli_stmt_execute($statement);
                            }
                            continue;
                        }
                        echo "<tr><td>".$row['username']."</td><td>".$row['Email']."</td><td>";
                        if ($row['acctType'] == 1) {
                            echo "Administrator";
                        } else {
                            echo "General User";
                        }
                        if ($row['acctType'] == 1) {
                            echo "</td><td>Can't delete Administrators</td></tr>";
                        } else {
                            echo "</td><td><a href = \"adminlist.php?delete=".$row['username']."\">Delete User</a></td></tr>";
                        }
                    }

                    mysqli_free_result($results);
                    mysqli_close($connection);
                }
            ?>
        </table>
    </div>

    <?php
        include 'footer.php';
    ?>

</body>
</html>
