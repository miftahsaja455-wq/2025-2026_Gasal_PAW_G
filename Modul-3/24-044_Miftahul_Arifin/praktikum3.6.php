<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DEksplorasi lanjut terhadap array </title>
</head>
<body>
    <?php 
    // 3.6.1 array_push()
    $buah = array("Apel", "Jeruk", "Mangga");
    array_push($buah, "Pisang", "Semangka");
    print_r ($buah);
?>
<br><br>

    <?php
    // 3.6.2 array_merge()
    $buah1 = array("Apel", "Jeruk", "Mangga");
    $buah2 = array("Pisang", "Semangka");
    $hasil = array_merge($buah1, $buah2);
    print_r($hasil);
    ?>
    <br><br>

    <?php
    // 3.6.3 array_values()
    $umur = array("Andi" => 21, "Budi" => 19, "Citra" => 22);
    $nilai = array_values($umur);
    print_r($nilai);
    ?>
    <br><br>

    <?php
    // 3.6.4 array_search()
    $warna = array("a" => "Merah", "b" => "Biru", "c" => "Hijau");

    $cari = array_search("Biru", $warna);

    echo "Nilai 'Biru' ada di pada key: " . $cari;
    ?>
    <br><br>







</body>
</html>