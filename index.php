<?php
$con = mysqli_connect('localhost', 'root', '', 'worker');
if(mysqli_connect_errno()) {
    echo 'error' . mysqli_connect_error();
} else {
    echo 'Ура';
}
//$str = "SELECT * FROM worker;";
//$res = mysqli_query($con, $str);
//$count = mysqli_num_rows($res);
?>







