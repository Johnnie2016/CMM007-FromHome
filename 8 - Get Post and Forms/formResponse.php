<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Display details</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
<?php
$surname = $_POST['surname'];
$name = $_POST['name'];
$gender = $_POST['gender'];
$power = $_POST['power'];
echo "Hello world";
echo $surname . $name . $gender . $power;
?>



</body>
</html>



