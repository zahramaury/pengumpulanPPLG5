<!-- latihan 1!! -->
<!-- <?php
$a = "ikan";
$b = "ikan";
    if($a == $b){
        echo "valuenya sama";
    }else{
        echo "valuenya beda";
    }
?>  -->

<!-- latihan 2!! -->
<!-- <?php
$a = 8;
$b = 9;
    if($b == $a){
        echo "bilanganya sama";
    }else{
        echo max($a, $b);
    }
?> -->

<!-- latihan 3!! -->
<!-- <?php
    if(83 >= 78){
        echo "kompeten";
    }else{
        echo "tidak kompeten";
    }
?> -->

<!-- latihan 4!! -->
<!-- <?php
    if(-9 >= 0){
        echo "positif";
    }else{
        echo "negatif";
    }
?> -->

<!-- latihan 5!! -->
<!-- <?php
$b = 136;
    if($b %2 == 0){
        echo "genap";
    }else{
        echo "ganjil";
    }
?> -->

<!-- latihan 6!! -->
<!-- <?php
$a = 176;
    if($a %6 == 0){
        echo "kelipatan 6";
    }else{
        echo "bukan kelipatan 6";
    }
?> -->

<!-- latihan 7!! -->
<!-- <?php
$a = 7;
    if(is_numeric($a)){ // is_numeric itu buat ngasih tau kalau si variable nya itu anka 
        echo "numeric";
    }else{
        echo "string";
    }
?> -->

<!-- latihan 8!! -->
<!-- <?php
$b ="";
    if($b == null){
        echo "tidak";
    }else{
        echo "value";
    }
?> -->

<!-- latihan 9!! -->
<!-- <?php
$a = 16 ;
    if($a >= 17){
        echo "ktp";
    }else{
        echo "tidak";
    }
?> -->

<!-- latihan 10!! -->
<?php
$a = 100.000;
$b = 154.000;
    if($b >= $a){
        $c = $b - ($b * 0.07);
    }else{
        $c = $b;
    }
    echo $c;
?> 