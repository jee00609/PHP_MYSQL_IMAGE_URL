<?php
    $servername = "localhost";
    $username = "Your_ID";
    $password = "Your_Password";
    $dbname = "Your_DB_Name";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection

    if ($conn->connect_error){
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT ----------"; //Example )"SELECT `IMG` FROM `BookList` WHERE `IDNum` = '2817'"
    $result = $conn->query($sql);

    // Associative array
    $row = $result -> fetch_assoc();
    //printf ("%s\n", $row["IMG"]);

    $image = $row["IMG"];
    $imageData = base64_encode(file_get_contents($image));
    echo '<img src="data:image/jpeg;base64,'.$imageData.'">';

    // Free result set
    $result -> free_result();

    $mysqli -> close();
?>
