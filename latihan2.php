<?php
//Looping / Pengulangan

//Type 1 = FOR
//for($i=1; $i <= 10; $i++){
    //echo $i . "Nivia Nur Kharisma <br>";
//}

//Type 2 = WHILE
//$i = 1;
//while ($i <= 10){
    //echo $i . "Nivia Nur Kharisma <br>";
   // $i++;
//}

//Type 3 = FOREACH
// Conditional / Pengkodisian
//$angka = 10;
//if ($angka > 10){
    //echo "Lebih besar dari 10";
//}else if ($angka == 10){
    //echo " Sama dengan 10";
//}
//else{
    //echo "Kurang dari 10";
//}

//ARRAY

$array = ['Yoon Jisung', 'Ha Sungwoon', 'Hwang Minhyun', 'Ong Seungwoo', 'Kim Jaehwan', 'Kang Daniel',
'Park Jihoon', 'Park Woojin', 'Bae Jinyoung', 'Lee Daehwi', 'Lai Kuanlin' ];
foreach($array as $WannaOne){
    echo "$WannaOne <br>";
}

//$produce = ['101', '101 S2', '48', 'X101', ['IOI', 'WannaOne', 'Izone', 'X1'] ];
//foreach($produce as $stand){
    //echo "$stand <br>";
//}

$nama = array(
    array("Nivia", "16", "Subang"),
    array("vica", "15", "Ci Cadas"),
    array("Asti", "15", "Subang"),
);

 foreach ($nama as $array){
     echo "Nama :$array[0]";
     echo "<br>";
     echo "Umur $array [1]";
     echo "<br>";
     echo "Alamat $array [2]";
     echo "<br>";
 }
?>