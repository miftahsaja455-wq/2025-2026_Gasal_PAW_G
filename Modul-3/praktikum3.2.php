<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panjang array dan akses array terindeks menggunakan loopingt</title>
</head>
<body>
    <?php 
    //contoh
    $fruist = array("avocado","blueberry","cherry");
    $arrlength = count($fruist);

    for($x = 0; $x < $arrlength; $x++) {
        echo$fruist[$x];
        echo"<br>";
    }
    ?>
    <br><br>

    
    <?php 
    // soal 3.2.1
    $fruist = array("avocado","blueberry","cherry");
    for($i = 0; $i < 5; $i++){
        $y = array("apel","melon","pisang","kelapa","mangga");
        $fruist[]= $y[$i];
    };
    $arrlength = count($fruist) ;
    for($x = 0; $x < $arrlength; $x++) {
        echo$fruist[$x];
        echo"<br>";
    }
    ?>
    <br><br>


    <?php 
    // soal 3.2.2
    $veggies = array("avocado","blueberry","cherry");
    for($x = 0; $x < count($veggies); $x++) {
        echo$veggies[$x];
        echo"<br>";
    }

    ?>
</body>
</html>