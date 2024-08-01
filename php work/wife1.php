<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "wife";

$connection = mysqli_connect($server, $username, $password, $db);

if (!$connection) {
    die("connection failed: " . mysqli_connect_error());
} else {
    echo "success";
}

if (isset($_POST["Name"])) {

    $Name = $_POST["Name"];
    $DateOfNikkah = $_POST["DateOfNikkah"];
    $DateOfDeath = $_POST["DateOfDeath"];

    $sqlinsert = "INSERT INTO wifename (Name, DateOfNikkah, DateOfDeath) VALUES ('$Name', '$DateOfNikkah', '$DateOfDeath')";

    $res = mysqli_query($connection, $sqlinsert);

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
    <link rel="stylesheet" href="//cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
</head>

<body>
    <div class="container">
        <form method="post" action="wife1.php">
            <div class="mb-3">
                <label for="exampleFormControlInput" class="form-label">Name</label>
                <input type="text" class="form-control" name="Name" id="exampleFormControlInput">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Date Of Nikkah</label>
                <input type="text" class="form-control" name="DateOfNikkah" id="exampleInputEmail1">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Date Of Death</label>
                <input type="text" class="form-control" name="DateOfDeath" id="exampleFormControlInput1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

  

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
