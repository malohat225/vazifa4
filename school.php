<?php
$servername = "127.0.1.15"; 
$username = "root";
$password = ""; 
$dbname = "maktab";   // sening database nomi
$port = 3306;

// MySQL ga ulanish
$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

// Ulanish xatosini tekshirish
if (!$conn) {
    die("Ulanishda xatolik: " . mysqli_connect_error());
}

// Ma’lumot olish so‘rovi (school table)
$sql = "SELECT * FROM school";
$result = mysqli_query($conn, $sql);

// Natijani chiqarish (line by line)
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

// Ulanishni yopish
mysqli_close($conn);
?>
