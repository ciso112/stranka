<?php  session_start(); ?>  

<?php

if(isset($_SESSION['use']))   
    
 {
    header("Location:home.php"); 
 }

if(isset($_POST['login']))  
{
     $user = $_POST['user'];
     $pass = $_POST['pass'];
     $sql = "SELECT * FROM uzivatelia WHERE login='$user' AND heslo='$pass'";
    
  
    include "connect.php";
    
      
    
    $vysledok=mysqli_query($conn,$sql);
    $values = mysqli_fetch_assoc($vysledok);
 
     if ($values == true)
       {                                    

          $_SESSION['use']=$user;

         echo $user;
         echo '<script type="text/javascript"> window.open("login.php","_self");</script>';          

        }
    
        else
        {
            echo "invalid UserName or Password";        
        }
}
 ?>
<html>
<head>

<title> Login Page   </title>

</head>

<body>

<form action="" method="post">

    <table width="200" border="50">
  <tr>
    <td>  UserName</td>
    <td> <input type="text" name="user" > </td>
  </tr>
  <tr>
    <td> PassWord  </td>
    <td><input type="password" name="pass"></td>
  </tr>
  <tr>
    <td> <input type="submit" name="login" value="LOGIN"></td>
    <td></td>
  </tr>
</table>
</form>

</body>
</html>