<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deklarasi dan akses array Multidimensi </title>
</head>
<body>
   <?php  
   // contoh
   $students = array 
   (
    array("alex","2204041","0812345678"),
    array("bianca","2204042","0812345687"),
    array("candiee","2204043","0812345665"),
   );
for ($row = 0; $row < 3; $row++){
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
    echo "<li>" . $students[$row][$col] . "</li>";
    }
    echo "</ul>";
   }
   ?>
   <br><br>
      <table border="1">
   <tr>

   <?php  
   // soal 3.5.1
   $students = array 
   (
    array("alex","2204041","0812345678"),
    array("bianca","2204042","0812345687"),
    array("candiee","2204043","0812345665"),
    array("bar1","2204044","0812345666"),
    array("bar2","2204045","0812345667"),
    array("bar3","2204046","0812345668"),
    array("bar4","2204047","0812345669"),
    array("bar5","2204048","08123456610"),
   );
// for ($row = 0; $row < 8; $row++){
//     echo "<p><b>Row number $row</b></p>";
//     echo "<ul>";
//     for ($col = 0; $col < 3; $col++) {
//     echo "<li>" . $students[$row][$col] . "</li>";
//     }
//     echo "</ul>";
//    }
   ?>
   <br><br> 


   <!--  soal 3.5.2 -->
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Nim</th>
            <th>Mobile</th>
        </tr>
   <?php  
   $students = array 
   (
    array("alex","2204041","0812345678"),
    array("bianca","2204042","0812345687"),
    array("candiee","2204043","0812345665"),
    array("bar1","2204044","0812345666"),
    array("bar2","2204045","0812345667"),
    array("bar3","2204046","0812345668"),
    array("bar4","2204047","0812345669"),
    array("bar5","2204048","08123456610")
   );
for ($row = 0; $row < 8; $row++){
    echo "<tr>";
    for ($col = 0; $col < 3; $col++) {
    echo "<td>" . $students[$row][$col] . "</td>";
    }
    echo "</tr>";
   }
   ?>
</table>

</body>
</html>