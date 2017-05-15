<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User selection</title>
</head>
<body>
<header>

    <h2>Display user details via selected userID number</h2>
    <p><a href="displayuser.php">Return to search page...</a></p>
</header>
<main>
    <?
    include("dbconcomplex.php");
    $userselected = $_POST["userselectionTestDB"];
    //$userselected = $_POST["userselectionTestDB"];
    echo $userselected . "testtest";

    //if(isset($_POST["userselectionTestDB"])) {

        //$sql_query = "SELECT userid, username, password FROM wellcoreusers WHERE userid = '21'";
    $sql_query = "SELECT userid, username, password FROM wellcoreusers WHERE userid = $userselected";
    //}
    //else {
        //$sql_query = "SELECT * FROM wellcoreusers";
   // }

    $result = $db->query($sql_query);
    while($row = $result->fetch_array())
    {
        $ID = $row['RowID'];
        $user = $row['userid'];
        $name = $row['username'];
        $pword = $row['password'];


        echo "<article>
             <p> User <strong> {$name} </strong> has identification number <strong> {$user}</strong>. Their password is <strong>{$pword}</strong></p></article>";
    }
    ?>

</main>
</body>
</html>