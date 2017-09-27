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
                        <form method="post" action="nacitanie.php" class="text-left"> 
                            ID clanku na upravenie:
                            <input type="text" name="cl_ID">
                            <BR>
                            <input type="submit" value="Uprav" name="Uprav"> 
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <div>
                        <h1>Pridat clanok</h1>
                        <form id="add_article" action="zapis.php" method="post" class="text-left">
                            Nadpis:
                            <input type="text" name="novinky_nadpis">
                            <BR>
                            Text:
                            <input type="text" name="novinky_text">
                            <BR>
                            <input type="submit" value="Pridaj" name="Pridaj">
                        </form>
                        <script src=validate.js>
                           
                        </script>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <div>
                        <h1>Ukazat clanok</h1>
                        <form action="citanie.php" method="post" class="text-left"> ID:
                            <input type="text" name="cl_ID">
                            <BR>
                            <input type="submit" value="Ukaz" name="Ukaz"> </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <div>
                        <h1>Zmaz clanok</h1>
                        <form action="zmazanie.php" method="post" class="text-left"> ID:
                            <input type="text" name="cl_ID">
                            <BR>
                            
                            <input type="submit" value="Zmaz" name="Zmaz"> </form>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="thumbnail">
                    <div>
                        <h1>Uploadni obrazok</h1>
                         <form action="upload.php" method="POST" enctype="multipart/form-data">
                             <input type="file" name="image" />
                             <input type="submit"/>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>