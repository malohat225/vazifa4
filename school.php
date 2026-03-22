<?php
$servername = "127.0.1.15"; 
$username = "root";
$password = ""; 
$dbname = "maktab";  
$port = 3306;

$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

$sql = "SELECT * FROM school";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['schooll_name'] . " - " 
           . $row['director_name'] . " - " 
           . $row['student_count'] . " - " 
           . $row['address'] . "<br>";
    }
} else {
    echo "Ma’lumot topilmadi";
}
?>
