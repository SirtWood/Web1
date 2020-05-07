<?php
    if(isset($_GET['id']))
    {
        include_once('db_connection.php');
        $id = $_GET['id'];
        $sql = "DELETE FROM user WHERE id = {$id}";
        $result = $conn->query($sql);
        header('location: index2.php');
    }
?>