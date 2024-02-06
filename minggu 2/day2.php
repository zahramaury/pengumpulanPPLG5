<!-- contoh-contoh hasil presentasi -->

<!-- contoh 1 -->
<!-- str_replace itu untuk mengubah huruf  -->
<?php
    $str = "hello";
    echo str_replace("e", "o", $str);
?>


<!-- contoh 2 -->
<!-- date_modify untuk menambah hari setelah  -->
<?php
    $date = date_create("2023-05-01");
    date_modify($date, "+3 days");
    echo "tanggal setelah ditambah 3 hari : " .date_format($date, "Y-m-d");
?> 

<!-- contoh 3 -->
<?php
    $string_pertama = "saya tinggal di Jakarta";
    $string_kedua = "di";

    $jumlah = strpos($string_pertama, $string_kedua);
    if($jumlah !== false){
        echo "Substring '$string_kedua' ditemukan pada posisi $jumlah";
    } else {
        echo "Substring '$string' tidak ditemukan dalam string";
    }
?>


<!-- contoh 4 -->
<?php
    $angka_acak = rand(1, 100);
    echo "Angka acak antara 1 dan 100 : " . $angka_acak;
?>


<!-- contoh 5 -->
<?php
    $data = "hello";
    echo strtoupper($data); // strtoupper untuk mengubah huruf kecil ke huruf kapital
?>


<!-- contoh 6 -->
<?php
$date = [1,2,3];
    if (is_array($date)) { // is_array untuk menentukan ia itu termasuk kedalam array atau tidak
        echo "Data adalah array";
    }else{
        echo "Data bukan array";
    }
?>


<!-- contoh 7 -->
<?php
$kendaraan = array('Mobil', 'Motor', 'Sepeda');
    $upper = array_map(function($value){ 
        return strtoupper($value);
        }, $kendaraan);
    echo '<pre>' ; print_r($upper);
?>


<!-- contoh 8 -->
<?php
    echo str_repeat("Hello World ", 2); // str_repeact untuk mengulang kata 
?>


<!-- contoh 9 -->
<?php
    $asal = array("jeruk", "pisang", "strawberry");
    $buah = array_pop($asal); // array_pop untuk menghapus element terakhir
    print_r($asal);
?>

<!-- contoh 10 -->
<?php
 $nama = "bei bei";
    echo strtolower($nama); // strtolower untuk mengubah huruf kecil ke huruf kapital
?>


<!-- contoh 11 -->
<?php
    $kata = " zahra & bei bei";
    echo "jumlah kata : " . strlen($kata); //strlen untuk menghitung jumlah huruf atau karakter

    if(strlen($kata) > 8){
        echo "kata '$kata' memiliki lebih dari 8 karakter. ";
    }else{
        echo "kata '$kata' memiliki 8 karakter atau kurang. ";
    }
?>


<!-- contoh 12 -->
<?php 
    echo sqrt(100); // untuk mencari akar pangkat
?>


<!-- contoh 13 -->
<?php 
    $str = "hello bei";
    echo $str . " ";
    echo rtrim($str, "bei");
?>


<!-- contoh 14 -->
<?php
// array_sum untuk menjumlah suatu nilai
$nilai = [
    [
        'nilai' => [80, 78, 82, 78, 88],
    ],
    [
        'nilai' => [86, 70, 80, 85, 81],
    ],
    [ 
        'nilai' => [83, 91, 70, 73, 81],
    ],
    [
        'nilai' => [89, 85, 84, 86, 88],
    ],
];

foreach ($nilai as $nilai_akhir) {
    $nilai = $nilai_akhir['nilai'];
    
    $totalNilai = array_sum($nilai);

    echo "Jumlah Nilai: $totalNilai\n";
}
?>


<!-- contoh 15 -->
<?php
    $arr = array("hello" => "hi", "bei" => "bei");
    echo strtr ("hello bei", $arr);
?>


<!-- contoh 16 -->
<?php
    $nama = ['bei bei', 'zahra', 'maury'];

    if(in_array('bei bei', $nama))
    {
        echo "adaaa";
    }else{
        echo "enga adaaa";
    }
?>


<!-- contoh 17 -->
<?php
echo (abs(6.7) . " "); // abs untuk mengubah bilangan negatif ke bilangan positif
    echo (abs(-6.7) . " ");
?>


<!-- contoh 18 -->
<?php
echo (floor(8.2) . " ");
    echo (floor(10.8). " "); // untuk ngebulatin angka ke bawah  data yang tadinya desimal menjadi bilangan bulat
?>


<!-- contoh 19 -->
<?php
$buah = array("jeruk", "pisang");
    array_push($buah, "semangka", "melon");
    print_r($buah);
?>


<!-- contoh 20 -->
<?php 
echo ceil(0.7); // untuk ngebulatin ke atasss
    echo " ";
echo ceil(1.2);
    echo " ";
?>


<!-- contoh 21 -->
<?php 
    $array = array(0,2,4,5,7,9,10);
    sort($array); // untuk mengurutkan bilangan terkecil ke terbesar
    print_r($array);
?>


<!-- contoh 22 -->
<?php
$rmbl = ['PPLG XI-5', 'PPLG XI-4', 'PPLG XI-3', 'PPLG XI-2', 'PPLG XI-1'];
array_reverse($rmbl);
print_r($rmbl);
?>

<!-- contoh 23 -->
<?php
$angka = ['1','4','5','10','2'];
 arsort ($angka);
print_r($angka);
?>

<!-- latihan soal -->
<?php
   function lenght($kalimat){
    $str = strlen($kalimat);
    $st = substr_count($kalimat, ' ');

    $result = $str - $st;

    echo $result;
   
    $jumlah_kata = str_word_count($kalimat);
    echo $jumlah_kata;
   }

   lenght('zahra bei')
?>