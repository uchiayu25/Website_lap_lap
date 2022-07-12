<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kabupaten-Beranda</title>
    <link rel="icon" href="image\Badung.png" type="image/icon type">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style2.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <header id="header" class="fixed-top"> 
        <!-- NAVIGATION BAR -->
        <div class="text-right mt-3 mr-5">
            <a class="btn btn-lg rounded-pill col-2" style="background: #0E4085; color:white;" href="login.php" type="button">LOGIN</a>
        </div>
    </header>
    
    <!-- <div style="z-index:1"> -->
        <!-- HERO -->
        <section id="hero" class="d-flex align-items-center" style="height">
            <img src="image\indexbg.png" class="img-fluid" alt="">
        </section>
    <!-- Footer -->
</body>
<script>
    var myVar;

    function myFunction() {
    myVar = setTimeout(showPage, 3000);
    }

    function showPage() {
    document.getElementById("loader").style.display = "none";
    document.getElementById("myDiv").style.display = "block";
    }
</script>
</html>