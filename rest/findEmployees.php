<?php
include_once('header.php');

//fetch table rows from mysql db
$sql = "select * from tbl_employee";
$result = mysqli_query($connection, $sql) or die("Error in Selecting " . mysqli_error($connection));

//create an array
$emparray[] = array();
while($row =mysqli_fetch_assoc($result)) {
   $emparray[] = $row;
}
echo json_encode($emparray);


include_once('footer.php');
?>
