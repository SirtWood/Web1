<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/styles2.css">
    <link rel="icon" href="img/logox.ico">
    <title>Document</title>
</head>

<body>
    <div class="container">

        <header>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="index.php">HEALTH+CARE</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Appointment</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Appointment
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="add_appointment.php">Add appointment</a>
                                <a class="dropdown-item" href="index2.php">Register appointments</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="index2.php">Edit / Delete appointment</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>



        <div class="imagen">
            <img src="img/hcban-min.jpg">
        </div>
    



<h1 class="form-title" id="tituloForm">E<span>dit form</span></h1> 

</--Table-->
<div class="card text-center" style="width: 100%;">
  <div class="card-header" style="width: 100%;">
    <div class="nav nav-pills card-header-pills" id="card">
      <div class="nav-item col-md-1 col-lg-1">Id</div>
      <div class="nav-item col-md-2 col-lg-2">Name</div>
      <div class="nav-item col-md-2 col-lg-2">Lastname</div>
      <div class="nav-item col-md-2 col-lg-2">Identification</div>
      <div class="nav-item col-md-1 col-lg-1">Birthdate</div>
      <div class="nav-item col-md-1 col-lg-1">City</div>
      <div class="nav-item col-md-1 col-lg-1">Town</div>
      <div class="nav-item col-md-1 col-lg-1">Cellphone</div>
      <div class="nav-item col-md-1 col-lg-1">Actions</div>
  </div>


<?php 

    try
    {
        include_once('db_connection.php');
        $sql = "SELECT * FROM user";
        $result = $conn->query($sql);
        if($result->num_rows > 0)
        {
            while($row = $result->fetch_assoc())
            {
                $rowTemplate = "<div class='nav nav-pills card-header-pills'>
                <div class='col-md-1 col-lg-1'>{$row['id']}</div>
                <div class='col-md-2 col-lg-2'>{$row['name']}</div>
                <div class='col-md-2 col-lg-2'>{$row['lastname']}</div>
                <div class='col-md-2 col-lg-2'>{$row['identification']}</div>
                <div class='col-md-1 col-lg-1'>{$row['birthdate']}</div>
                <div class='col-md-1 col-lg-1'>{$row['city']}</div>
                <div class='col-md-1 col-lg-1'>{$row['town']}</div>
                <div class='col-md-1 col-lg-1'>{$row['cellphone']}</div>
                <div class='col-md-1 col-lg-1'>
                    <a href='edit_appointment.php?id={$row['id']}'class='badge badge-primary'>Edit</a>
                    <a href='delete_appointment.php?id={$row['id']}'class='badge badge-primary' onclick='return delalert();'>Delete</a>
                </div>

                
                </div>";
                echo $rowTemplate; 

            }
        }
    }
    catch(Exception $ex)
    {
        echo "Error";
    }

?>
</div>

<?php include_once('layouts/footer.php'); ?>
