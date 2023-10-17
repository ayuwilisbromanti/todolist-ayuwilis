<?php
include "connection.php";
$id = $_POST['id'];
$todo = $_POST['todo'];

$edit = mysqli_query($conn, "UPDATE `list` SET `to_do`='$todo' WHERE `id`='$id'");

if($edit){
    echo "<script>alert('Succed!'); location.href='index.php'</script>";
}else{
    echo "<script>alert('Sowry!'); location.href='index.php</script>";
}

?>