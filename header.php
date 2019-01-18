<!DOCTYPE html>
<html lang="en" >
    <head>
        <title>PHP Tema Programare Web</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="./assets/style.css">
        <?php
            // include './class/connection.php';
            include './class/student.php';
            $student_obj = new Student();

            include './class/table1.php';
            $table1_obj = new Table1();
        ?>  
    </head>
    <body >
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse pull-right" id="navbarTogglerDemo01">

                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <a class="navbar-brand tlogo" href="#"><img src="./assets/images/cee.png" alt="CE" class="tlogo"></a>
                        </div>
                        <div class="col-lg-8">
                            <ul class="navbar-nav" style="float:right; margin-top:20px;" id="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link active" href="index.php">Prezentare Tema<span class="sr-only"></span></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link button" href="tema1.php">Tema1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="tema2.php">Tema2</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="tema34.php">Tema3 + Tema 4</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>                
            </div>
        </nav>
