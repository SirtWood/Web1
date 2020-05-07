<?php
if (isset($_GET['id'])) {
    include_once('db_connection.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM user WHERE id = {$id}";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        print_r($row);
    }
}
?>


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




        <div class="row">
            <h1 class="form-title" id="tituloForm">E<span>dit form</span></h1>

            <form action="update_appointment.php?id=<?php echo $row['id'] ?>" method="post">
                <div class="form-row">


                    <div class="form-group col-md-6">
                        <label for="id">Id</label>
                        <input type="text" value="<?php echo $row['id'] ?>" name="userId" class="form-control" placeholder="Id" id="id">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="userName">Name</label>
                        <input type="text" value="<?php echo $row['name'] ?>" name="userName" class="form-control" placeholder="Enter user name" id="userName">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="userLastname">Lastname</label>
                        <input type="text" value="<?php echo $row['lastname'] ?>" name="userLastname" class="form-control" placeholder="Enter user lastname" id="userLastname">
                    </div>

                    <div class="form-group col-md-6">
                        <div input-group>
                            <label for="userIdentification">Identification Number</label>
                            <input type="text" value="<?php echo $row['identification'] ?>" name="userIdentification" class="form-control" placeholder="Enter user identification number" id="userIdentification">
                        </div>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="userBirthdate">Birthdate</label>
                        <input type="date" value="<?php echo $row['birthdate'] ?>" name="userBirthdate" class="form-control" placeholder="Enter user birthdate" id="userBirthdate">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="userCity">City</label>
                        <input type="text" value="<?php echo $row['city'] ?>" name="userCity" class="form-control" placeholder="Enter user City" id="userCity">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="userTown">Town</label>
                        <input type="text" value="<?php echo $row['town'] ?>" name="userTown" class="form-control" placeholder="Enter user Town" id="userTown">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="userCellphone">Cell phone</label>
                        <input type="text" value="<?php echo $row['cellphone'] ?>" name="userCellphone" class="form-control" placeholder="Enter user cell phone" id="userCellphone">
                    </div>

                </div>

                <div class="form-group">
                    <div>
                        <p class="help-block" for="send">Send appointment</p>
                        <button class="btn btn-primary" id="send">Send</button>
                    </div>
                </div>

            </form>

        </div>

        <?php include_once('layouts/footer.php'); ?>