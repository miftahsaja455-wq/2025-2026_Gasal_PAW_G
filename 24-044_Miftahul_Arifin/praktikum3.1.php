<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>deklarasi dan akses array terindeks</title>
</head>
<body>
    <?php 
    // soal 3.1.1
    $fruist = array("avocado", "bluebery", "cherry","apel","mangga","anggur","langsat","melon");
    $nilaiterbesar = end($fruist);
    echo "nilai dengan indeks tertinggi = $nilaiterbesar <br><br>";
    $nilaiterbesar = array_key_last($fruist);
    echo "array dengan indeks tertinggi = $nilaiterbesar <br><br>";
    ?>
<br><br>
    <?php 
    // soal 3.1.2
    $f = array("avocado", "bluebery", "cherry","apel","mangga","anggur","langsat","melon");
    unset($f[3]);
     $nilaiterbesar = end($f);
    echo "nilai dengan indeks tertinggi = $nilaiterbesar <br><br>";
    $nilaiterbesar = array_key_last($f);
    echo "array dengan indeks tertinggi = $nilaiterbesar <br><br>";
    // soal 3.1.3
    ?>
    <br><br>
    <?php 
    $veggies = array("data1", "data2", "data3");
    print_r( $veggies);
    ?>
</body>
</html>