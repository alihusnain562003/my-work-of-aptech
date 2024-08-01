<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "formDOB";


$con = mysqli_connect($server, $username, $password, $database);



if (!$con) {
    die("connection is failed" . mysqli_connect_error());
} else {

    echo "success";
}

if (isset($_POST["name"])) {


    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["email"];
    $contect = $_POST["email"];
    $date = $_POST["email"];

    $sqlinsert = "Insert into info (name, email,password,contect,date)values('$name', '$email', '$password', '$contect', '$date')";

    $res = mysqli_query($con, $sqlinsert);

    if ($res) {
        echo "inserted";
    }
}



?>




<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <form method="POST" action="LES1 .php">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Name</label>
                <input type="text" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="container">
        <form method="POST" action="Lec02Formpost.php">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email</label>
                <input type="email" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="container">
        <form method="POST" action="Lec02Formpost.php">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Password</label>
                <input type="number" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="container">
        <form method="POST" action="Lec02Formpost.php">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Contect</label>
                <input type="number" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="container">
        <form method="POST" action="Lec02Formpost.php">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Date</label>
                <input type="date" class="form-control" name="title" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>











    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>