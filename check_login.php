<meta charset="utf-8">
<?php
@session_start();



if(empty($_SESSION['sid'])){
echo "<script>";
echo "location='login.php';";
echo "</script>";
}
?>

