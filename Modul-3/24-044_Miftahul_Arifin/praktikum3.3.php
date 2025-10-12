<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deklarasi dan akses array asosiatif </title>
</head>
<body>
    <?php 
    // contoh
    $height = array("andy"=>"176","barry"=>"165","charlie"=>"170");
    echo "andy is" . $height['andy'] . "cm tall";
    ?>
    <br><br>

    <?php 
    // soal 3.3.1
    $height = array("andy"=>"176","barry"=>"165","charlie"=>"170","miftah"=>"171","raja"=>"171","inong"=>"172","rohdi"=>"173","wildan"=>"174");
    echo "nilai dengan indeks terakhir dari array height : ". end($height);
    ?>
    <br><br>

    <?php 
    // soal 3.3.2
    $height = array("andy"=>"176","barry"=>"165","charlie"=>"170","miftah"=>"171","raja"=>"171","inong"=>"172","rohdi"=>"173","wildan"=>"174");
    unset($height[3]);
    echo "nilai dengan indeks terakhir dari array height : ". end($height);
    ?>
    <br><br>
    
    <?php 
    // soal 3.3.2
    $weight = array(
        "nama"=>"miftah",
        "alamat"=>"sumenep",
        "hobby"=>"tidur",
    );

    echo "data ke 2 dari array weight : " . ($weight['alamat']);
    ?>
    <br><br>
</body>
</html>