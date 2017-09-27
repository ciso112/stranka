<html>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>ZŠ s MŠ Budmerice</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font.css">
    <link rel="stylesheet" type="text/css" href="assets/css/li-scroller.css">
    <link rel="stylesheet" type="text/css" href="assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="assets/css/jquery.fancybox.css">
    <link rel="stylesheet" type="text/css" href="assets/css/theme.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/infile_style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>
</head>

<body>
    <?php
    include "menu.html";
    ?>
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <div>
                        <h1>Upravit clanok</h1>
                        <form method="post" action="zmena.php" class="text-left"> 
                            <BR> Text na upravu:
                            <input type="text" name="cl_text_upraveny" value=<?php 
                                   include "connect.php";
                                   $ID = $_POST['cl_ID'];
                                   $sql = "SELECT text FROM novinky WHERE ID='$ID'";
                                   $query=mysqli_query($conn,$sql); 
                                   $vysledok = mysqli_fetch_array($query);
                                   echo $vysledok[0] ?> >
                            <input type="hidden" name="cl_ID" value=<?php $ID = $_POST['cl_ID']; echo $ID ?>>
                            <BR>
                            <input type="submit" value="Uprav" name="Uprav"> 
                        </form>
                    </div>
                </div>
            </div>




