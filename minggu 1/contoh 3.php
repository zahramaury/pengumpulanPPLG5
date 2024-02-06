<!-- contoh ternari -->
<!-- <?php
$nilai = 10;
echo $nilai > 8 ? 'Sangat Baik' : 'Baik';
?> -->

<!-- contoh soal -->

<!-- <?php
$a = "ikan";
$b = "ikan";
$ucapan = $a == $b ? "sama" : "tidak sama";
echo $ucapan;
?> -->

<!-- <?php
    $a = 7;
    $b = is_numeric ($a) ? "numeric" : "string";
    echo $b; 
?> -->

<!-- <?php
$a = 97;
$b = $a >= 90 ? "predikat a" : ( $a >= 75  ? "predikat b" : "predikat c"
);
echo $b;
?> -->

<!-- <?php
    $date = date('2024-01-22');
    $day = date('l', strtotime($date));
    $hasil = $day == 'Monday' ? "5%" : ($day == 'Friday' ? "2%" : "0%");
    echo $hasil;
?> -->

<!-- perulangan -->
<?php 
$keterangan = 'izin';
$persentase = '100';

$izinsakit = 1;
$alfa = 0;

$hasil = $izinsakit ? $persentase - 3 : ($alfa ? $persentase - 5 : $persentase);

$hasil = $keterangan == 'izin' || $keterangan == 'sakit' ? $persentase - 3 : ($keterangan == 'alfa' ? $persentase - 5 : $persentase);
echo $hasil;
?>