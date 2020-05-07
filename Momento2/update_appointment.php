<?php  
    if(isset($_GET['id']));
    {
        include_once('db_connection.php');
        $id = $_GET['id'];
        $userName = $_POST['userName'];
        $userLastname = $_POST['userLastname'];
        $userIdentification = $_POST['userIdentification'];
        $userBirthdate = $_POST['userBirthdate'];
        $userCity = $_POST['userCity'];
        $userTown = $_POST['userTown'];
        $userCellphone = $_POST['userCellphone'];
        $sql = "UPDATE user SET name = '{$userName}', lastname = '{$userLastname}', identification = '{$userIdentification}', birthdate = '{$userBirthdate}', city = '{$userCity}', town = '{$userTown}', cellphone = '{$userCellphone}' WHERE id = {$id}";

        $result = $conn->query($sql);
        header("location: index2.php");
        
    }
?>