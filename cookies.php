<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penyimpanan Data Identitas dengan Cookie</title>
</head>
<body>
    <h1>Penyimpanan Data Identitas</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <button type="submit">Simpan</button>
    </form>

    <?php

if (isset($_POST['nama']) && isset($_POST['email'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];

    // Storing identity data in a cookie
    $data_identitas = array("nama" => $nama, "email" => $email);
    setcookie('data_identitas', json_encode($data_identitas), 1716296136);

    echo "<p>Identity data successfully saved.</p>";
}

if (isset($_COOKIE['data_identitas'])) {
    $data_identitas = json_decode($_COOKIE['data_identitas'], true);
    echo "<h2>Stored Identity Data</h2>";
    echo "<p>Name: " . $data_identitas['nama'] . "</p>";
    echo "<p>Email: " . $data_identitas['email'] . "</p>";
}

?>

</body>
</html>
