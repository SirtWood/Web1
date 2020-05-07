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
                                <a class="dropdown-item" href="index2.php">Edit appointment</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="index2.php">Delete appointment</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>



        <div class="imagen">
            <img src="img/hcban-min.jpg">
        </div>
    



        <h1 class="registration" id="tituloForm">R<span>egistration form</span></h1>

        <form action="save_appointment.php" method="post" onsubmit="return validate();">

                <div class="form-group">
                    <label class="sr-only" for="userName">Name</label>
                    <input type="text" class="form-control" name="userName" placeholder="Enter name" id="userName">
                </div>

                <div class="form-group">
                        <label class="sr-only" for="userLastname">Lastname</label>
                        <input type="text" class="form-control" name="userLastname" placeholder="Enter lastname" id="userLastname">
                </div>

                <div class="form-group">
                    <label class="sr-only" for="userIdentification">Identification Number</label>
                    <input type="text" class="form-control" name="userIdentification" placeholder="Enter identification number" id="userIdentification">
                </div>

                <div class="form-group">
                    <label class="sr-only" for="userBirthdate">Birthdate</label>
                    <input type="date" class="form-control" name="userBirthdate" placeholder="Enter birthdate" id="userBirthdate">
                </div>

                <div class="form-group">
                    <label class="sr-only" for="userCity">City</label>
                    <input type="text" class="form-control" name="userCity" placeholder="Enter City" id="userCity">
                </div>

                <div class="form-group">
                    <label class="sr-only" for="userTown">Town</label>
                    <input type="text" class="form-control" name="userTown" placeholder="Enter Town" id="userTown">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="userCellphone">Cell phone</label>
                    <input type="text" class="form-control" name="userCellphone" placeholder="Enter cell phone" id="userCellphone">
                </div>


                <div class="form-group">
                    <p class="help-block" for="send">Send appointment</p>
                    <button class="btn btn-primary" id="send">Send</button>
                </div>

        </form>


<?php include_once('layouts/footer.php'); ?>