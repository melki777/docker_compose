<?php
    $name = $_POST['name'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    //CONNECTION PARAMETER
    $dbhost = 'db';
    $dbuser = 'root';
    $dbpass = 'root';

    //CONNECTION STRING
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass);

    //MAKE CONNECTION
    if(! $conn ) {
        die('Could not connect: ' . mysqli_error());
    }

    //ACTIVATE DATABASE
    mysqli_select_db($conn, 'connection_database');

    $sql = 'CREATE TABLE IF NOT EXISTS feedback (id_feedback int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT, name varchar(75) NOT NULL, address varchar(50) NOT NULL, phone varchar(15) NOT NULL, message varchar(200) NOT NULL)';
    
    $retval = mysqli_query($conn, $sql);

    //DEFINE QUERY INSERT
    //$sql = 'INSERT INTO tbl_sample (first_name, last_name) VALUES("x","x")';
    $sql = 'INSERT INTO feedback (name, address, phone, message) VALUES("'.$name.'","'.$address.'","'.$phone.'","'.$message.'")';
  
    //EXECUTE QUERY INSERT
    $retval = mysqli_query($conn, $sql);

    echo 'Succefully Process';
?>