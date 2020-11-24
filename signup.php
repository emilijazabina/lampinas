<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Akvakultūra</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">    <link rel="stylesheet" href="css/stylesheet.css" >

</head>
<body>

<nav class="navbar fixed-top navbar-expand-lg navbar-light" style="">
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
    <h1 class="h1" style="color: white">Akvakultūra</h1>
</div>

<div class="container">
    <form action="signup" method="post">

        <div class="form-group">
            <label for="name">Vārds</label>
            <input type="text" class="form-control" id="vards" placeholder="Vārds">
        </div>
        <div class="form-group">
            <label for="surname">Uzvārds</label>
            <input type="text" class="form-control" id="surname" placeholder="Uzvārds">
        </div>
        <div class="form-group">
            <label for="email">E-pasta adrese</label>
            <input type="email" class="form-control" id="email" placeholder="vards@epasts.com">
        </div>
        <div class="form-group">
            <label for="tel">Telefons</label>
            <input type="tel" class="form-control" id="tel" placeholder="Telefona numurs">
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="sanemInfo" value="option1">
            <label class="form-check-label" for="inlineRadio1">Vēlētos no mums saņemt informāciju?</label>
        </div>
        <h5>
            Atzīmējiet vēlamo saziņas veidu ar jums!
        </h5>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
            <label class="form-check-label" for="defaultCheck1">
                E-pasts
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="defaultCheck2">
            <label class="form-check-label" for="defaultCheck2">
                Tālrunis
            </label>
        </div>
        <p></p>
        <p></p>
        <button class="btn btn-primary" type="submit" name="submit">Submit</button>
    </form>
</div>
<?php
    if(isset($_POST['submit'])){
        echo "poga nospiesta";
    }
?>

</body>
</html>
