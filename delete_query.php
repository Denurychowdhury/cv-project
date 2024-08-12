<?php 
include_once 'db_config.php';

$id = $_GET['id'];

$DELETE_SQL = "DELETE FROM CV_DOCUMENT WHERE ID = $id";

$result = mysqli_query($conn, $DELETE_SQL);
if ($result) {
    header("Location: view-all-students.php");
} else {
    echo 'Error:' .mysqli_error($conn);
}
?>
