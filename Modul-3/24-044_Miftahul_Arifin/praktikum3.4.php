<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mengakses array asosiatif dengan perulangan menggunakan struktur perulangan (loop)</title>
</head>
<body>
    <?php 
    // contoh
    $height = array("andy"=>"176","barry"=>"165","charlie"=>"170");
    foreach($height as $x => $x_value) {
        echo "key : $x value : $x_value";
        echo "<br>";
    }
    ?>
    <br><br>

    <?php 
    // soal 3.4.1
    $height = array("andy"=>"176","barry"=>"165","charlie"=>"170","baru1"=>"171","baru2"=>"172","baru3"=>"173","baru4"=>"174","baru5"=>"175");
    foreach($height as $x => $x_value) {
        echo "key : $x value : $x_value ";
        echo "<br>";
    }
    ?>
    <br><br>

        <?php 
    // 3.4.2
    $weight = array("andy"=>"176","barry"=>"165","charlie"=>"170");
    foreach($weight as $x => $x_value) {
        echo "key : $x value : $x_value";
        echo "<br>";
    }
    ?>
</body>
</html>