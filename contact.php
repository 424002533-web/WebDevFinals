<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // GET FORM DATA

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

} else {

    // REDIRECT IF ACCESSED DIRECTLY

    header("Location: index.html");
    exit();

}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Message Received</title>

    <!-- Bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            background:#f5f5f5;
            font-family:'Poppins', sans-serif;

            display:flex;
            justify-content:center;
            align-items:center;

            height:100vh;
        }

        .box{
            background:white;
            padding:40px;
            border-radius:15px;
            box-shadow:0 5px 15px rgba(0,0,0,0.1);

            max-width:500px;
            width:100%;
            text-align:center;
        }

        h1{
            color:#6f4e37;
            margin-bottom:20px;
        }

        p{
            font-size:18px;
            margin:10px 0;
        }

        .btn-custom{
            background:#6f4e37;
            color:white;
            border:none;

            padding:12px 25px;
            border-radius:30px;

            text-decoration:none;
            display:inline-block;

            margin-top:20px;
        }

        .btn-custom:hover{
            background:#c59d5f;
            color:white;
        }

    </style>

</head>

<body>

    <div class="box">

        <h1>Message Received!</h1>

        <p>
            <strong>Name:</strong>
            <?php echo $name; ?>
        </p>

        <p>
            <strong>Email:</strong>
            <?php echo $email; ?>
        </p>

        <p>
            <strong>Message:</strong>
            <?php echo $message; ?>
        </p>

        <a href="index.html" class="btn-custom">
            Go Back
        </a>

    </div>

</body>

</html>