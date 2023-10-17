<?php
include "connection.php";
$todo = $_POST['todo'];
$insert = mysqli_query($conn, "INSERT INTO `list`(`to_do`, `is_done`) VALUES ('$todo',false)");

if($insert){
    echo "<script>alert('Succed!'); location.href='index.php'</script>";
}else{
    echo "<script>alert('Sowry!'); location.href='index.php</script>";

}
?>