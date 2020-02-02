

<?php
var_dump($_POST);
echo "<hr>";
$errors = [];
foreach($_POST as $key => $value) {
    if(empty($value)) {
        $errors[$key] = $key;
        echo "Введите" .  $errors[$key];
    } else {
        echo "good";
    }
}

$connect = mysqli_connect('localhost', 'root', '', "worker");
mysqli_set_charset($connect, "utf8");
if(mysqli_connect_errno()) {
    echo "error" . mysqli_connect_error();
} else {
    echo 'Ура';
}
//$query = "UPDATE `users` SET name='George' WHERE id='3';";
//$res = mysqli_query($connect, $query);
$str = "SELECT * FROM users;";
$res = mysqli_query($connect, $str);
var_dump($res);
$count = mysqli_num_rows($res);
var_dump($count);
$row1 = mysqli_fetch_array($res);
$row2 = mysqli_fetch_array($res);
$row3 = mysqli_fetch_row($res);
//print_r($row3) . '<br>';

//print_r($row1) .'<br>';
//print_r($row2) . '<br>';
while($row = mysqli_fetch_assoc($res)) {
    echo $row["id"] . " " . $row["name"] . " " .$row["last_name"]  . " " . $row["profession"] . " " . $row["salary"] . "<br>";
}
echo "<hr>";
$query = "SELECT * FROM users WHERE salary>1000;";
$res = mysqli_query($connect, $query);

echo '<br>';
while ($row = mysqli_fetch_assoc($res)) {
    echo implode(' ', $row) . nl2br(PHP_EOL);
}
echo '<hr>';
$query  = "SELECT name, last_name FROM users;";
$res = mysqli_query($connect, $query);
while($row = mysqli_fetch_assoc($res)) {
    echo implode('', $row) . '<br>';
    echo '<hr>';

}
echo '<hr>';

$con = mysqli_connect("localhost", "root", "", "testsite");
mysqli_set_charset($con, "utf8");

if(mysqli_connect_errno()) {
    echo "Failed to connect to MySQL" . mysqli_connect_error();
}
/*$query = "INSERT INTO `news_category` VALUES (NULL, 'Категория 50', 'Описание 6', '1', '1'), (NULL, 'Категория 51', 'Описание 7', '1', '1'), (NULL, 'Категория 42', 'Описание 52', '1', '1') ;";*/
$query = "UPDATE `news` SET h1='Новый заголовок 3' WHERE id='1';";
$info = mysqli_query($con, $query);
var_dump($info);
echo "Hello world";
echo '<br>';
// echo mysqli_affected_rows($con);
$query = "SELECT * FROM `news`;";
$result = mysqli_query($con, $query);
$count =mysqli_num_rows($result);
echo $count;
// $row1 = mysqli_fetch_array($result);
// $row2 = mysqli_fetch_array($result);
// echo '<pre>';
// print_r($row1);
// print_r($row2);
echo "<pre>";
if($count) {
    while($row = mysqli_fetch_array($result)) {
        echo '<p>';
        echo $row['h1'];
        echo '</p>';

    }
}
// var_dump($info);
$array = array('lastname', 'email', 'phone');
$comma_separated = implode(",", $array);

echo $comma_separated; // lastname,email,phone
?>

