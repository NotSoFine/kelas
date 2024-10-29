<?php 
$sekolah=["live","nman","reaction","tonight"];
$sekolahs=["lvl1"=>"you nuts","lvl2"=>"not bad","lvl3"=>"cool af"];
$skills =["CPP"=>"EXPERT","HTML"=>"NEWBIE","CSS"=>"NEWBIE","PHP"=>"INTERMEDIATE","JS"=>"INTERMEDIATE"];
$identyty=["name"=>"manface","address"=>"bluddy road 9120","email"=>"furher@gmail.com","FB"=>"bluddy.e23"];
$hobbies=["code","bathing","grassing","livereact","heyguys"];
echo $sekolah[0];
echo "<br>";
echo $sekolahs ["lvl1"];
echo "<br>";
echo $sekolah [1];
echo "<br>";
echo $sekolahs ["lvl2"];

echo "<br>";
for ($i = 0; $i <4; $i++){
    echo $sekolah [$i];
    echo "<br>";
    echo "<br>";
}
foreach ($sekolah as $jonny);
    echo "<br>";
foreach ($sekolahs as $key => $value); 
    echo $key;
    echo "=";
    echo $value;
    echo "<br>";
foreach ($skills as $key => $value ) ;  
    echo $key;
    echo "=";
    echo $value;
    echo "<br>";
    if(isset($_GET["menu"]))
        $menu=$_GET["menu"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hpj-10</title>
</head>
<body>
    <hr>
    <ul>
        <li><a href="?menu=home">home</a></li>
        <li><a href="?menu=cv">cv</a></li>
        <li><a href="?menu=project">project</a></li>
        <li><a href="?menu=contanct">contanct</a></li>
    </ul>
    <hr>
    <h2>IDENTTUIITUIT</h2>
    <hr>
        <table border="1">
        <thead>
            <tr>
                <th>the what</th>
                <th>content</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($identyty as $key => $value) {
            ?>
            <tr>
                <td><?=$key?></td>
                <td><?=$value?></td>
            </tr> 
            <?php
            }
            ?>
        </tbody>
        </table>
    <table border="1">
        <thead>
            <tr>
                <td>num</td>
                <td>eh?</td>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($sekolah as $key => $value) {
                echo "<tr>";
                echo "<td>";
                echo "$key";
                echo "</td>";
                echo "<td>";
                echo "$value";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <hr>
    <h2>KSILLS</h2>
    <table border="1">
        <thead>
            <tr>
                <td>code</td>
                <td>LVL</td>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($skills as $key => $value) {
                echo "<tr>";
                echo "<td>";
                echo "$key";
                echo "</td>";
                echo "<td>";
                echo "$value";
                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
    <hr>
    <h2>hobby</h2>
    <ol>
    <?php
    foreach($hobbies as $key) {
    ?>
    <li><?= $key ?></li>
    <?php
    } 
    ?>
    </ol>
</body>
</html>