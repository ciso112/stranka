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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
</head>

<body>
    <?php
    include "menu.html";
    ?>
    <div class="row">
        <div class="col-sm-6 col-md-3">
            <div class="thumbnail"> <img src=http://localhost/img/trieda.jpg alt="...">
                <div class="caption">
                    <h3>Záujmové krúžky</h3>
                    <p>Pre tento školský rok sme pre naše deti pripravili široký výber záujmových krúžkov a to pre prvý i druhý stupeň. Celú ponuku nájdete v ľavom menu pod položkou Krúžky 2016/2017. Prihlásiť sa na krúžky je možné prostredníctvom triednych učiteľov, ktorí vám budú zasielať prihlášky, kam nám prosím napíšte, o aký krúžok má vaše dieťa záujem.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="thumbnail"> <img src=https://edupage12.edupage.org/connect_photo.php?e=zsbudmerice&s=6&c=/photos/album/271/img2ef32272aaab92f10e49.jpg alt="...">
                <div class="caption">
                    <h3><?php
                        include "connect.php";
                        $sql="SELECT * FROM novinky WHERE ID=2";

                            if ($vysledok=mysqli_query($conn,$sql))
                                {
                                // Fetch one and one row
                                while ($zaznam=mysqli_fetch_row($vysledok))
                                {
                                echo $zaznam[1];
                                }
                            }
                        
                        ?></h3>
                    <p>Pre tento školský rok sme pre naše deti pripravili široký výber záujmových krúžkov a to pre prvý i druhý stupeň. Celú ponuku nájdete v ľavom menu pod položkou Krúžky 2016/2017. Prihlásiť sa na krúžky je možné prostredníctvom triednych učiteľov, ktorí vám budú zasielať prihlášky, kam nám prosím napíšte, o aký krúžok má vaše dieťa záujem.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-3">
            <div class="thumbnail"> <img src=https://edupage12.edupage.org/connect_photo.php?e=zsbudmerice&s=6&c=/photos/album/271/img2ef32272aaab92f10e49.jpg alt="...">
                <div class="caption">
                    <h3>Jesenný zber papiera</h3>
                    <p>Jesenný zber papiera sa uskutoční v dňoch 10. - 18. október 2016. Papier, prosím, prineste medzi 7.00 - 15.00 hod.</p>
                </div>
            </div>
        </div>
        <div class="col-sm-2 sidenav">
            <div>
                <form method="post" action="" class="text-left"> Prve cislo:
                    <input type="number" name="num1">
                    <BR> Druhe cislo:
                    <input type="number" name="num2">
                    <BR>
                    <select name="operator">
                        <option>+</option>
                        <option>-</option>
                        <option>*</option>
                        <option>/</option>
                    </select>
                    <BR> Vypocitat?
                    <BR> ano
                    <input type="radio" name="volba" value="ano"> nie
                    <input type="radio" name="volba" value="nie">
                    <input type="submit" value="Posli">
                    <?php
                            if (isset($_POST['num1'])):
                                if (isset($_POST['num2'])):
                                       switch ($_POST['operator']) {
                                        case '+':
                                           $_POST['vysledok'] = $_POST['num1']+$_POST['num2'];
                                           break;
                                        case '-':
                                           $_POST['vysledok'] = $_POST['num1']-$_POST['num2'];
                                           break;
                                        case '*':
                                           $_POST['vysledok'] = $_POST['num1']*$_POST['num2'];
                                           break;
                                        case '/':
                                           $_POST['vysledok'] = $_POST['num1']/$_POST['num2'];
                                           break;
                                       }
                                endif;
                             endif;
                        ?> Vysledok:
                        <input type="textbox" name="vysledok" value="
                    <?php if (isset($_POST['volba'])){
                           if ($_POST['volba']==" nie "){
                                 echo 'ee';
                           }
                            elseif ($_POST['volba']=="ano "){
                                  echo $_POST['vysledok'];
                            }
                        }  ?> ">
                        <BR> </form>
            </div>
        </div>
    </div>
    
    <footer class="container-fluid text-center">
        <p>Footer Text</p>
    </footer>
    <!--   <div class="alert alert-success" role="alert">...</div> <a href="#" class="alert-link">...</a>
    <div class="alert alert-info" role="alert">...</div>
    <div class="alert alert-warning" role="alert">...</div>
    <div class="alert alert-danger" role="alert">...</div> -->
    <!-- <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail"> <img src="..." alt="...">
                <div class="caption">
                    <h3>Thumbnail label</h3>
                    <p>...</p>
                    <p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p>
                </div>
            </div>
        </div>
    </div> -->
</body>

</html>