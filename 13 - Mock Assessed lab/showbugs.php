

// is this bit below required
<?php

 include_once('dbaseconn.php');

 if ($db -> connect_errno)
     {
         die ('Connect failed: ' . $db->connect_errno);
 }

 ?>
//





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Bug Tracker Home</title>
    <link rel="stylesheet" type="text/css" href="resources/style.css">
    <link rel="stylesheet" type="text/css" href="resources/unsemantic-grid-responsive-tablet.css">
    <link rel='stylesheet' type='text/css' href='https://fonts.googleapis.com/css?family=Roboto:400,700'>
    <meta name="viewpoint" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1">
</head>
<body>

<!-- HEADER STARTS HERE -->
<header class="grid-100">
    <img id="Logo" src="resources/logo.png" alt="Logo" class="grid-20">
    <div class="grid-80" id="Top row text">
        <h1>Bug Tracker</h1>
        <h2>Keeping track of all the pesky little bugs</h2>
    </div>
</header>
<!-- HEADER FINISHES HERE -->

<!-- MAIN STARTS HERE -->
<main class="grid-container">
    <nav class="grid-25" id="Navigation">
        <ul>
            <li><a href="showbugs.php">All Bug Items</a></li><br>
            <li><a href="showbugs.php?bugcategory=android">Android Bugs</a></li><br>
            <li><a href="showbugs.php?bugcategory=iOS">iOS bugs</a></li><br>
            <li><a href="showbugs.php?bugcategory=windows">Windows bugs</a></li><br>
            <li><a href="addbugs.php">Insert bugs</a></li><br>
        </ul>
    </nav>

    <section class="grid-75">
        <div id="bugshow">
            <?php
                             include ("dbaseconn.php");
             if($_GET['bugcategory']=="android"){
                                 $getbugs = "SELECT * FROM Bugs where bugcategory like '%android%'";
                 $result = mysqli_query($db, $getbugs);
                 while ($row = mysqli_fetch_array($result)) {
                                         echo "<h3>". $row['bugname'] . "</h3>";
                     echo "<h5>". $row['bugcategory'] . "</h5>";
                     echo "<p>". $row['bugsummary'] . "</p>";
                 }
             }elseif($_GET['bugcategory']=="ios"){
                                 $getbugs = "SELECT * FROM Bugs where bugcategory like '%iOS%'";
                 $result = mysqli_query($db, $getbugs);
                 while ($row = mysqli_fetch_array($result)) {
                                         echo "<h3>". $row['bugname'] . "</h3>";
                     echo "<h5>". $row['bugcategory'] . "</h5>";
                     echo "<p>". $row['bugsummary'] . "</p>";
                 }
             }elseif($_GET['bugcategory']=="windows"){
                                 $getbugs = "SELECT * FROM Bugs where bugcategory like '%Windows%'";
                 $result = mysqli_query($db, $getbugs);
                 while ($row = mysqli_fetch_array($result)) {
                                         echo "<h3>". $row['bugname'] . "</h3>";
                     echo "<h5>". $row['bugcategory'] . "</h5>";
                     echo "<p>". $row['bugsummary'] . "</p>";
                 }
             }else{

                 $getbugs = "SELECT * FROM Bugs";
                 $result = mysqli_query($db, $getbugs);
                 while ($row = mysqli_fetch_array($result)) {
                                         echo "<h3>". $row['bugname'] . "</h3>";
                     echo "<h5>". $row['bugcategory'] . "</h5>";
                     echo "<p>". $row['bugsummary'] . "</p>";
                 }
             }
             ?>
        </div>
    </section>

</main>
<!-- MAIN FINISHES HERE -->

<!-- FOOTER STARTS HERE -->
<footer>
    <p>Designed by John Morrison, 2016</p>
</footer>
<!-- FOOTER FINISHES HERE -->

</body>
</html>