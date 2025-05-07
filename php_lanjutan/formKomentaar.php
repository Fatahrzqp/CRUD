<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Komentar</title>
</head>
<body>

<?php 
    function bersihkan_data ($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $name = $email = $comment = "";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["nama"];
        $email = $_POST["email"];
        $komentar = $_POST["komentar"];
        echo("Nama : ".$name."<br>");
        echo("Email : ".$email."<br>");
        echo("Komentaar : ".$komentar."<br>");
        echo("<hr>");
    }
?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    Nama : <input type="text" name="nama"> <br>
    E-mail : <input type="text" name="email"> <br>
    Komentar : <textarea name="komentar" rows="5" cols="40"></textarea> <br>
    <input type="submit" value="simpan">
    <input type="reset" value="bersihkan">
</form>
</body>
</html>