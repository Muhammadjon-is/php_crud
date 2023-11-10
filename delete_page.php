<?php  include('dbconf.php')?>

<?php
if(isset($_GET['id'])) {
    $id = $_GET['id'];
}
$deleteQuery = "DELETE FROM `Students` WHERE id = '$id'";
        
$deleteResult = mysqli_query($connection, $deleteQuery);


if (!$deleteResult) {
    die("Delete Query Failed: " . mysqli_error($connection));
} else {
    header('location:index.php?delete_msg=Record deleted successfully');
}


?>

