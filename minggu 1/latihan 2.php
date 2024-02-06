<!-- apakah 9 termasuk ke dalam bilangan positif atau negatif, apakah 9 itu lebih besar dari 10 -->
<!-- <?php 
    $a = 9;
    $b = 10;
    if($a >= 0){
        echo "bilangan positif";
    if($a > 10){
        echo "lebih besar";
    }else{
        echo " tidak";
    }
    }else{
        echo "bilangan negatiff";
    }

?> -->

<!-- nilai andi adalah 90 dan kehadiran 100%, syarat untuk masuk kedalam kategori siswa berprestasi adalah harus memenuhi
syarat dengan nilai minimal 85 dan kehadiran 98% -->
<!-- <?php
$a = 90;
$b = 100;
    if($a > 85 && $b > 98){
        echo "berprestasi";
    }else{
        echo "tidak berprestasi";
    }
?> -->

<!-- nomor 1 -->
<!-- <?php
$a = 97;

if($a >= 90){
    echo "predikat A";
}elseif($a >= 75 ){
    echo "predikat B";
}else{
    echo "predikat C";
}
?> -->

<!-- nomor 2 -->
<!-- <?php
$usia = 17;

if (6 <= $usia && $usia <= 12) {
    $waktu_tidur_rekomendasi = 10;
} elseif (12 < $usia && $usia <= 18) {
    $waktu_tidur_rekomendasi = 9;
} elseif (18 <= $usia && $usia <= 40) {
    $waktu_tidur_rekomendasi = 8;
} else {
    $waktu_tidur_rekomendasi = "Tidak ada rekomendasi untuk rentang $usia ini.";
}

echo "Untuk usia $usia tahun, waktu tidur yang direkomendasikan adalah $waktu_tidur_rekomendasi jam.";

?> -->

<!-- nomor 3 -->
<!-- <?php 
$a = 9;
    if($a > 0){
        echo "bilangan positif";
    }elseif($a < 0 ){
        echo "bilangan negatif";
    }else{
        echo "bilangan cacah";
    }
?> -->

<!-- nomor 4 -->
<!-- <?php
$a = 15 - 8;
$b = 30000;
    if($a > 0 ){
        $c = $a * $b;
    }
    echo $c;
?> -->

<!-- nomor 5 -->
<!-- <?php
    $a = 2004;
    $b = $a - 3;
     if($a %4 == 0 && $b %4 == 0){
        echo "keduanya lahir di tahun kabisat";
       
    }elseif(($a %4 == 0)){
        echo "andi lahir di tahun kabisat";
        
    }elseif($b %4 == 0){
        echo "eko lahir di tahun kabisat";
    }
    else{
        echo "tidak keduanya";
    }
?> -->

<!-- nomor 6 -->
<!-- <?php
    $a = 44;
    $b = 1.48 ** 2;
    $c = $a / $b;
    if($c >= 18.5){
        echo "normal";
    }elseif($c >= 22.9 && $c < 24.9){
        echo "berat badan lebih";
    }elseif($c >= 25){
        echo "obesitas";
    }else{
        echo "kurang";
    }
?> -->

<!-- nomor 7 -->
<!-- <?php
    $nasigoreng = 15000;
    $ayam = 20000;
    $nasikebuli = 25000;
    $jus = 8000;
    $esteh = 3000;
    $esjeruk = 5000;
    $date = date('2024-01-22');
    $belanja = ($nasikebuli * 2) + $ayam + ($nasigoreng * 2);
    $day = date('l', strtotime($date));
    
    
    if($day == 'Monday'){
        echo $belanja - ($belanja * 0.02) ;
    }elseif($day == 'Friday'){
        echo $belanja - ($belanja * 0.05);
    }else{
        echo $belanja;
    }
?> -->

<!-- nomor 8 -->
<!-- <?php
$a = 13;
$b = 9;
$c = $a * $b;
    if($c >= 150){
        echo "Tipe 70";
    }elseif($c >= 120 && $c <= 150){
        echo "Tipe 60";
    }elseif($c >= 96 && $c <= 120){
        echo "Tipe 54";
    }elseif($c >= 90 && $c <= 96){
        echo "45";
    }else{
        echo "Tipe 36";
    }
?> -->

<!-- nomor 10 -->
<?php
$total_belanja = 150000;
if ($total_belanja >= 100000) {
    $voucher = 10000;
if ($total_belanja >= 150000) {
    $permen_kaki = 1;
}
} else {
$voucher = 0;
$permen_kaki = 0;
}
echo "Voucher potongan harga: Rp. " . $voucher;
echo " Permen kaki: ".$permen_kaki;
?>