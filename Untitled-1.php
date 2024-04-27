<?php
    // getting all values from the HTML form
    if(isset($_POST['submit']))
    {
        $tracking= $_POST['trackingnumber'];
        $location = $_POST['Location'];
        $destination = $_POST['To destination'];
    }

    // database details
    $host = "localhost";
    $username = "root";
    $password = "sujoy123";
    $dbname = "mysql";

    // creating a connection
    $con = mysqli_connect($host, $username, $password, $dbname);

    // to ensure that the connection is made
    if (!$con)
    {
        die("Connection failed!" . mysqli_connect_error());
    }

    // using sql to create a data entry query
    $sql = "INSERT INTO we values ($tracking);"
  
    // send query to the database to add values and confirm if successful
    $r = mysqli_query($con, $sql);
    if($r)
    {
        echo "Entries added!";
    }
  
    // close connection
    mysqli_close($con);

?>