<?php
$data="ㄏㄟ、何ㄉ那？";
$isi="ㄙㄆㄞㄎㄦ、得ㄏㄠ他！";
$matery="ㄏㄟ- 私不可看！";
$list1 ="VARRRRw";
$list2 ="jarray";
$list3 ="pengeugjian";
$list4 ="loop";
$list5 ="Fucntion";
$list6 ="class";
$list7 ="object";
$list8 ="framewoekr";
$list9 ="jphp&mysql";
$lists=["var","array","pengujian","loop","fucnrtion","class","object","farmowrk","php&mySQLee"];
echo $data;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kamar{text-align:center}
        .li{justify-content:center;}
    </style>
</head>
<body>
    
    <div class="kamar">
        <h1><?php echo $data; ?></h1>
        <p><?php echo $isi; ?></p>
        <h2><?=$matery; ?></h2>
    <h1>PHP</h1>
    <p>PART 1</p>
    <h2>MATERY</h2>
    <div class="list">
    <ol>
        <li><?=$lists[0] ; ?></li>
        <p>var adalah wadah/tempat untuk menyimpan data</p>
        <p>data bisa berupa text,string,bisa juga berupa angka atau 
        numerik,dan juga bisa gabungan antara text,angaka,dan simbol</p>
        <li><?=$lists[1]; ?></li>
        <li><?=$lists[2]; ?></li>
        <li><?=$lists[3]; ?></li>
        <li><?=$lists[4]; ?></li>
        <li><?=$lists[5]; ?></li>
        <li><?=$lists[6]; ?></li>
        <li><?=$lists[7]; ?></li>
        <li><?=$lists[8]; ?></li>


    </ol>
    </div>
    </div>
</body>
</html>