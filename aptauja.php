<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Akvakultūra</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">    <link rel="stylesheet" href="css/stylesheet.css" >

</head>
<body>

<nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-color: #C0F2F5">
    <a class="navbar-brand" href="home.html"><img src="img/akva_logo.png" alt=""></a>
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
    <h4>.</h4>
</div>

<div class="container">
    <form action="aptauja" method="post">
        <div class="form-group">
            <label for="exampleFormControlInput1">E-pasta adrese</label>
            <input type="email" class="form-control" id="email" placeholder="vards@epasts.com" name="email">
        </div>
        <div class="form-group">
            <label for="name">Vārds</label>
            <input type="text" class="form-control" id="name" placeholder="Vārds" name="name">
        </div>
        <div class="form-group">
            <label for="surname">Uzvārds</label>
            <input type="text" class="form-control" id="surname" placeholder="Uzvārds" name="surname">
        </div>
        <div class="form-group">
            <label for="lampinas">Kādas lampiņas jums visvairāk patīk?</label>
            <select class="form-control" id="lampinas" name="lampinas">
                <option>Izvēlieties no saraksta</option>
                <option>Ziemassvētku</option>
                <option>LED</option>
                <option>LED virtenes</option>
                <option>Kvēlspuldzes</option>
                <option>Ekanomiskās</option>
            </select>
        </div>
        <div class="form-group">
            <label for="ieteikumi">Jūsu ieteikumi</label>
            <textarea class="form-control" id="ieteikumi" rows="4" name="ieteikumi"></textarea>
        </div>
        <div class="form-group">
            <label for="atsauksmes">Jūsu atsauksmes</label>
            <textarea class="form-control" id="atsauksmes" rows="4" name="atsauksmes"></textarea>
        </div>
        <p></p>
        <button class="btn btn-primary" type="submit" name="submit">Iesniegt</button>
    </form>
</div>
<?php

if(isset($_POST['submit'])){
    echo " <b>Vārds:</b> {$_POST['name']}";
    echo " <b>Jūsu ieteikums:</b> {$_POST['ieteikumi']}";

}
?>

</body>
</html>