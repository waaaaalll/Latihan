<?php
include "koneksi.php";
session_start();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wall : v</title>
</head>
<body>
    <h4>Selamat Datang <?php echo $_SESSION['nama'] ?></h4>

</body>
</html>