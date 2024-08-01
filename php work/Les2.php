<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "";



$conn = mysqli_connect($server, $username, $password, );


    
if (!$conn) {
    die("connection is failed" . mysqli_connect_error());
} else {

    echo "success";
}


if (isset($_POST["name"])) {


    $name = $_POST["name"];
    $email = $_POST["email"];
    $pass = $_POST["pass"];
    $contect = $_POST["contect"];
    $date = $_POST["date"];

    $sqlinsert = "Insert into info (name, email,password,contect,date)values('$name', '$email', '$pass', '$contect', '$date')";

    $res = mysqli_query($conn, $sqlinsert);

    if ($res) {
        echo "inserted";
    }
}
else {

    echo "failed". mysqli_connect_error();
}


?>
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
    <form method="POST" action="Les2.php">
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
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>




    <div class="container">
        <h1>Data Information Table</h1>
        <table class="table" id="myTable">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                    <th scope="col">pass</th>
                    <th scope="col">contect</th>
                    <th scope="col">date</th>
                </tr>
            </thead>
            <tbody>

                <?php

                $selectshow = "Select * from far";
                $result = mysqli_query($conn, $selectshow);
                


                $counter = 1;

                while ($item = mysqli_fetch_assoc($result)) {

                 
                    echo " <tr>";
                    echo "<th scope='row'>" . $counter++  . "</th>";
                    echo " <td>" . $item["name"] . "</td>";
                    echo "  <td>" . $item["email"] . "</td>";
                    echo "  <td>" . $item["pass"] . "</td>";
                    echo "  <td>" . $item["contect"] . "</td>";
                    echo "  <td>" . $item["date"] . "</td>";
                    echo "</tr>";
                }



                ?>





            </tbody>
        </table>


    </div>

 <!--jquery cdn link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


    <!-- js link datatable  -->
    <script src="//cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>







    <script>
        let table = new DataTable('#myTable');
    </script>





</body>

</html>