<?php
    if(!isset($_POST['userName']))
    {
        die('Error not comming data');
    }

    $userId = $_POST['userId'];
    $userName = $_POST['userName'];
    $userLastname = $_POST['userLastname'];
    $userIdentification = $_POST['userIdentification'];
    $userBirthdate = $_POST['userBirthdate'];
    $userCity = $_POST['userCity'];
    $userTown = $_POST['userTown'];
    $userCellphone = $_POST['userCellphone'];

    try
    {
        include_once('db_connection.php');
        $sql = "INSERT INTO user (name, lastname, identification, birthdate, city, town, cellphone) VALUES ('{$userName}', '{$userLastname}', '{$userIdentification}', '{$userBirthdate}', '{$userCity}', '{$userTown}', '{$userCellphone}')";
        $result = $conn->query($sql);
        header ("location: index2.php");
    }
    catch(Exception $ex)
    {
        echo "DB connection error";
    }
?>