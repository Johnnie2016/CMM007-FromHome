<?php
    define('DB_SERVER', 'br-cdbr-azure-south-a.cloudapp.net');
    define('DB_USERNAME', 'b3ac9c625849d8');
    define('DB_PASSWORD', 'f04f3dfe');
    define('DB_DATABASE', 'JM0207753');

    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>


// test if connection was established and print any errors


// Use if needed
// if (!db) {
        die('Connect error: ' . mysqli_connect_errno());
}

//if(!$db){
10         echo "Can't connect to Database" . mysqli_error();
11     }