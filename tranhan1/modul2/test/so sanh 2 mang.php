<?php
$firstList = array("John", "Jeny", "Rose", "Jack");
$secondList = array("Adam", "Rose", "Jack", "Tyson", "Tom");

// viet chuong trinh tim ten xuat hien o ca 2 mang
for ($i = 0; $i < count($firstList); $i++) {
    for ($j = 0; $j < count($secondList); $j++) {
        if ($firstList[$i] == $secondList[$j]) {
            echo $firstList[$i] . " ";
        }
    }
}
//echo "<br>";
//cach dung foreach
//foreach ($firstList as $item) {
//    foreach ($secondList as $item1) {
//        if ($item == $item1) {
//            echo $item . " ";
//        }
//    }
//}
//for ($i = 0; $i < count($firstList); $i++) {
//    for ($j = 0; $j < count($secondList); $j++) {
//        if ($firstList[$i] == $secondList[$j]) {
//            echo $firstList[$i] . " ";
//        }
//    }
//}

