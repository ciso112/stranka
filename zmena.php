<?php
    include "connect.php";
    ?>

<?php
    $ID = $_POST['cl_ID'];
    $upraveny_text = $_POST['cl_text_upraveny'];

    $sql = "UPDATE novinky SET text='$upraveny_text' WHERE ID = '$ID'";
    echo $sql . "<BR>";
    if (mysqli_query($conn, $sql)) {
    echo "Your record has been updated successfully";
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
 
?>