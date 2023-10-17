<?php
include "connection.php";

$id = $_GET['id'];
$delete = mysqli_query($conn, "DELETE FROM list WHERE id = $id");

if($delete){
    echo "<script>alert('Succed!'); location.href='index.php'</script>";
}else{
    echo "<script>alert('Sowry!'); location.href='index.php</script>";
}

?>