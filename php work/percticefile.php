<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "gggr";


$connection = mysqli_connect($server, $username, $password, $db);


if (!$connection) {
    die("connection is failed" . mysqli_connect_error());
} else {
    echo "success";
}



if (isset($_POST["name"])) {


    $name = $_POST["name"];
    $email = $_POST["email"];
    $title = $_POST["title"];
    $decs = $_POST["decs"];
    $dop = $_POST["date"];


    $sqlinsert = "insert into info(Name, Email, Title, Description, Dateofpost)values('$name','$email','$title','$decs','$dop')";


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
        <form method="post" action="bisma.php">


            <div class="mb-3">
                <label for="exampleFormControlInput" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="exampleFormControlInput">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                <textarea class="form-control" name="decs" id="exampleFormControlTextarea1"></textarea>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput" class="form-label">Date of Post</label>
                <input type="date" class="form-control" name="date" id="exampleFormControlInput">
            </div>



            <button type="submit" class="btn btn-primary">Submit</button>
        </form>


    </div>

    <div class="container">
        <table class="table table-striped table-hover"  id="myTable">
            <thead>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Date of Post</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>


                <?php
                $sqlshow = "select * from rrrg";
                $result = mysqli_query($connection, $sqlshow);



                //   $rowofbi=mysqli_fetch_assoc($result);
                //   $rowofbi=mysqli_fetch_assoc($result);

                //   echo var_dump($rowofbi);

                while ($itemofbi = mysqli_fetch_assoc($result)) {

                    // echo var_dump($itemofbi)."<br>" ;
                    // echo $itemofbi["Name"];


                    echo "   <tr>";
                    echo "   <th scope='row'>1</th>";
                    echo "   <td>" . $itemofbi["Name"] . "</td>";
                    echo "   <td>" . $itemofbi["Email"] . "</td>";
                    echo "   <td>" . $itemofbi["Title"] . "</td>";
                    echo "   <td>" . $itemofbi["Description"] . "</td>";
                    echo "   <td>" . $itemofbi["Dateofpost"] . "</td>";
                    echo "  <td><button type='button' class='btn btn-success'>Update</button>
                    <button type='button' class='btn btn-danger'>Delete</button></td>";
                    echo " </tr>";
                }

                ?>













            </tbody>
        </table>

    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

 
    <script>
        let table = new DataTable('#myTable');
    </script>






</body>

</html>