<?php
$servername = "127.0.1.15"; 
$username = "root";
$password = ""; 
$dbname = "Turonmaktab";
$port = 3306;

$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

// 2️⃣ Ulanish xatosini tekshirish
if (!$conn) {
    die("Ulanishda xatolik: " . mysqli_connect_error());
}

// 3️⃣ Ma’lumot olish so‘rovi
$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);

// 4️⃣ Natijani chiqarish
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['id'] . " - " . $row['full_name'] . " - " . $row['phone_number'] . " - " . $row['address'] . "<br>";
    }
} else {
    echo "Ma’lumot topilmadi";
}

// 5️⃣ Ulanishni yopish
mysqli_close($conn);
?>