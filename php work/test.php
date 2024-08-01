<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "db1";

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
    $decs = $_POST["decs"];

    $sqlinsert = "INSERT INTO tb1 (name, email, title, decs) VALUES ('$name', '$email', '$title', '$decs')";
    $res = mysqli_query($connection, $sqlinsert);

    if ($res) {
        echo "Inserted successfully";
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Card and Form Integration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
    <style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            background-color: #f0f0f0;
            margin: 0;
            padding: 20px;
        }
        .card {
            width: 300px;
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            margin-bottom: 20px;
        }
        .card-img {
            width: 100%;
            height: 150px;
            object-fit: cover;
        }
        .card-content {
            padding: 16px;
        }
        .card-title {
            font-size: 1.5em;
            margin-bottom: 8px;
        }
        .card-description {
            font-size: 1em;
            color: #555;
            margin-bottom: 16px;
        }
        button {
            padding: 10px 15px;
            border: none;
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .form-container {
            max-width: 500px;
            width: 100%;
            background: #fff;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .form-container .mb-3 {
            margin-bottom: 15px;
        }
    </style>
</head>

<body>


    <div class="form-container">
        <form method="post" action="card-form.php">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" name="title" id="title">
            </div>
            <div class="mb-3">
                <label for="decs" class="form-label">Description</label>
                <textarea class="form-control" name="decs" id="decs"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <div class="container mt-5">
        <table class="table table-striped table-hover" id="Table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sqlshow = "SELECT * FROM tb1";
                $result = mysqli_query($connection, $sqlshow);
                $counter = 1;

                while ($itemofbi = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<th scope='row'>{$counter}</th>";
                    echo "<td>{$itemofbi['name']}</td>";
                    echo "<td>{$itemofbi['email']}</td>";
                    echo "<td>{$itemofbi['title']}</td>";
                    echo "<td>{$itemofbi['decs']}</td>";
                    echo "</tr>";
                    $counter++;
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        function changeDescription() {
            const descriptionElement = document.querySelector('.card-description');
            descriptionElement.textContent = 'The description has been changed!';
        }

        let table = new DataTable('#Table');
    </script>
</body>

</html>
 