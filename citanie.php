
<?php
    include "connect.php";
    ?>

<?php
$ID = $_POST['cl_ID'];
$sql="SELECT * FROM novinky WHERE ID='$ID'";

if ($vysledok=mysqli_query($conn,$sql))
  {
  // Fetch one and one row
  while ($zaznam=mysqli_fetch_row($vysledok))
    {
   echo "ID: ". $zaznam[0]."<BR>";
   echo "Nadpis: " . $zaznam[1]."<BR>";
   echo "Text: ".$zaznam[2]."<BR>"."<BR>";
      
    }
}
  
?> 
