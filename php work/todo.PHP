<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "db2";

$connection = mysqli_connect($server, $username, $password, $db);

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully";
}

if (isset($_POST["name"])) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $title = $_POST["title"];
    $contect = $_POST["contect"];
    $date = $_POST["date"];

    $sqlinsert = "INSERT INTO tb2 (name, email, title, contect, date) VALUES ('$name', '$email', '$title', '$contect', '$date')";

    $res = mysqli_query($connection, $sqlinsert);

    if ($res) {
        echo "Inserted";
    }
}

if (isset($_GET["delete"])) {
    $id = $_GET["delete"];
    $delquery = "DELETE FROM tb2 WHERE id = '$id'";
    $resultdel = mysqli_query($connection, $delquery);

    if ($resultdel) {
        echo "Deleted";
        header("Location: todo.php");
        exit();
    }
}

if (isset($_POST["idupdate"])) {
    $id = $_POST["idupdate"];
    $name = $_POST["nameupdate"];
    $email = $_POST["emailupdate"];
    $title = $_POST["titleupdate"];
    $contect = $_POST["contectupdate"];
    $date = $_POST["dateupdate"];

    $update = "UPDATE tb2 SET name='$name', email='$email', title='$title', contect='$contect', date='$date' WHERE id = '$id'";
    $result = mysqli_query($connection, $update);

    if ($result) {
        echo "Updated";
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
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Update Your Data</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="todo.php" method="post">
                        <input type="hidden" name="idupdate" id="userid">
                        <div class="mb-3">
                            <label for="exampleFormControlInput" class="form-label">Name</label>
                            <input type="text" class="form-control" name="nameupdate" id="namev">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" name="emailupdate" id="emailv" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Title</label>
                            <input type="text" class="form-control" name="titleupdate" id="titlev">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Contect</label>
                            <input type="number" class="form-control" name="contectupdate" id="contectv">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Date</label>
                            <input type="date" class="form-control" name="dateupdate" id="datev">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <form method="post" action="todo.php">
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
                <label for="exampleFormControlInput1" class="form-label">Contect</label>
                <input type="number" class="form-control" name="contect" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Date</label>
                <input type="date" class="form-control" name="date" id="exampleFormControlInput1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <div class="container">
        <table class="table table-striped table-hover" id="Table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Title</th>
                    <th scope="col">Contect</th>
                    <th scope="col">Date</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sqlshow = "SELECT * FROM tb2";
                $results = mysqli_query($connection, $sqlshow);
                while ($itemofbi = mysqli_fetch_assoc($results)) {
                    echo "<tr>";
                    echo "<th scope='row'>" . $itemofbi["id"] . "</th>";
                    echo "<td>" . $itemofbi["name"] . "</td>";
                    echo "<td>" . $itemofbi["email"] . "</td>";
                    echo "<td>" . $itemofbi["title"] . "</td>";
                    echo "<td>" . $itemofbi["contect"] . "</td>";
                    echo "<td>" . $itemofbi["date"] . "</td>";
                    echo "<td>
                        <div class='d-grid gap-2 d-md-block'>
                            <button class='btn btn-primary Edit' data-bs-toggle='modal' data-bs-target='#exampleModal' type='button' id='" . $itemofbi["id"] . "'>Edit</button>
                            <button class='btn btn-danger Delete' type='button' id='" . $itemofbi["id"] . "'>Delete</button>
                        </div>
                        </td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        let editkardo = document.getElementsByClassName("Edit");
        Array.from(editkardo).forEach((index) => {
            index.addEventListener("click", (i) => {
                let tr = i.target.parentNode.parentNode.parentNode;
                let name = tr.getElementsByTagName("td")[0].innerText;
                let email = tr.getElementsByTagName("td")[1].innerText;
                let contect = tr.getElementsByTagName("td")[2].innerText;
                let title = tr.getElementsByTagName("td")[3].innerText;
                let date = tr.getElementsByTagName("td")[4].innerText;
                
                document.getElementById("namev").value = name;
                document.getElementById("emailv").value = email;
                document.getElementById("contectv").value = contect;
                document.getElementById("titlev").value = title;
                document.getElementById("datev").value = date;
                document.getElementById("userid").value = i.target.id;
            });
        });

        let deletekardo = document.getElementsByClassName("Delete");
        Array.from(deletekardo).forEach((index) => {
            index.addEventListener("click", (i) => {
                let sno = i.target.id;
                if (confirm("Are you sure you want to delete?")) {
                    window.location = `todo.php?delete=${sno}`;
                }
            });
        });

        let table = new DataTable('#Table');
    </script>
</body>

</html>
