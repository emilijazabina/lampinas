<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lampiņas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/stylesheet.css" >

</head>
<body>

<nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #C0F2F5">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="index">Sākums</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="preces">Preces</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="login">Log-In</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="signup">Sign-Up</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="aptauja">Feedback</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container">
    <h1 class="h1" style="color: white">Lampiņas</h1>
</div>


<div class="container">
    <form action="login" method="post">
        <div class="form-group">
            <label for="email">E-pasta adrese</label><input type="email" class="form-control" id="email" placeholder="vards@epasts.com" name="email">
        </div>
        <div class="form-group">
            <label for="parole">Parole</label>
            <input type="password" class="form-control" id="parole" placeholder="Password" name="parole">
        </div>
        <p></p>
        <button class="btn btn-primary" type="submit" name="submit">Submit</button>
    </form>
</div>
<?php

if (empty($_POST["email"])) {
    $emailErr = "Email is required";
} else {
    $email = test_input($_POST["email"]);
}
if (empty($_POST["parole"])) {
    $comment = "";
} else {
    $comment = test_input($_POST["parole"]);
}
if(isset($_POST['submit'])){
    echo " <b>E-pasts:</b> {$_POST['email']}</br>";
    echo " <b>Parole:</b> {$_POST['parole']}";
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

</body>
</html>
