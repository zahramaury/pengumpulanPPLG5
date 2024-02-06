<!-- nomor 1 -->
<?php
$string = "wikrama";
$panjang = substr($string, -2,1);
    echo $panjang;
?> <br>

<!-- nomor 2 -->
<?php
    $ulangi = 1;
    while($ulangi <= 10){
        echo $ulangi;
        $ulangi++;
    }
?><br>

<!-- nomor 3 -->
<?php
     $ulangi = 10;
     while($ulangi > 5){
         echo $ulangi;
         $ulangi--;
     }
?><br>

<!-- nomor 4 -->
<?php 
    for ($i=1; $i<=6; $i++) 
    { 
        echo "<h$i>Heading $i</h$i>";
    }
?>

<!-- nomor 5 -->
<?php
for ($i = 1; $i <= 30; $i++) {
    if ($i % 4 == 0) {
        echo "$i, ";
    }
}
?>

<!-- nomor 6 -->
<?php
$a = 0;
    for($i = 5; $i <= 25; $i+= 5){
        if (225 % $i == 0){
            $a++;
        }
    }
    echo $a;
?>

<!-- nomor 7 -->
<?php $student = [
        [
            "nama" => "Andi",
            "rombel" => "PPLG XI - 1",
            "rayon" => "Ciawi 4",
            "jk" => "L"
        ], 
        [
            "nama" => "Sasa",
            "rombel" => "PPLG XI - 6",
            "rayon" => "Sukasari 1",
            "jk" => "P"
        ],
        [
            "nama" => "Lala",
            "rombel" => "PPLG XI - 3",
            "rayon" => "Cisarua 3",
            "jk" => "P"
        ],
        [
            "nama" => "Beni",
            "rombel" => "PPLG XI - 2",
            "rayon" => "Cicurug 2",
            "jk" => "L"
        ],
       
    ]?>

   <?php foreach( $student as $std) : ?>
    <br>   nama => <?= $std["nama"]?> 
    <br>   rombel =><?= $std ["rombel"]; ?> 
    <br>   rayon => <?= $std ["rayon"]; ?> 
    <br>   jk => <?= $std ["jk"]; ?>
    <br>
        <?php endforeach ; ?><br>

<!-- nomor 8 -->
<?php
$bilangan = array(75, 77, 87, 70, 90, 81, 69, 87, 66);

    $kompeten = array();
    $belum_kompeten = array();

foreach ($bilangan as $nilai){
    if ($nilai >= 75){
        $kompeten[] = $nilai;
    }else{
        $belum_kompeten[] = $nilai;
    }
}
    echo "kelompok pertama (kompeten) : " ;
foreach ($kompeten as $nilai_kompeten){
    echo $nilai_kompeten . ' ';
}
    echo "<br>";
    echo "kelompok kedua (belum kompeten) : ";
foreach ($kompeten as $nilai_belum_kompeten){
    echo $nilai_belum_kompeten . ' ';
}
?><br>

<!-- nomor 9 -->
<?php
for ($e = 1; $e <= 3; $e++) {
        for ($j = 1; $j <= 10; $j++) {
       $hasil = $e * $j;
         echo "$e x $j = $hasil" ."<br>";
        }
    }
?><br>

<!-- nomor 10 -->

<!-- nomor 11 -->
<?php
$bil1 = [80, 77, 65, 89, 55, 12, 90, 86];
$bil2 = [77, 99, 81, 45, 90, 98];

$kelompokSama = [];
$kelompokBeda = [];

foreach ($bil1 as $bilangan) {
    if (in_array($bilangan, $bil2)) {
        $kelompokSama[] = $bilangan;
    } else {
        $kelompokBeda[] = $bilangan;
    }
}
foreach ($bil2 as $bilangan) {
    if (!in_array($bilangan, $bil1)) {
        $kelompokBeda[] = $bilangan;
    }
}
echo "Kelompok yang terdapat di kedua variabel: " . implode(', ', $kelompokSama) . "<br>";
echo "Kelompok yang hanya terdapat di satu variabel saja: " . implode(', ', $kelompokBeda);
?><br>

<!-- nomor 12 -->
<?php
$barang = [
    [
        'nama' => 'Ban', 'diskon' => '10'
    ],
    [
        'nama' => 'oli mesin'
    ],
    [
        'nama' => 'kampas rem'
    ],
    [
        'nama' => 'busi', 'diskon' => '9'
    ],
    [
        'nama' => 'akumulator', 'diskon' => '7'
        ]
];

foreach ($barang as $item) {
    if (isset($item['diskon'])) { 
        echo "Nama Barang : " . $item['nama'] . ", Diskon: " . $item['diskon'] . "<br>";
    }
}
?><br>

<!-- nomor 14 -->
<?php
$students = [
    [
        'nama' => 'Andi',
        'nilai' => [80, 78, 82, 78, 88],
    ],
    [
        'nama' => 'Beni',
        'nilai' => [86, 70, 80, 85, 81],
    ],
    [
        'nama' => 'Danii',
        'nilai' => [83, 91, 70, 73, 81],
    ],
    [
        'nama' => 'Eko',
        'nilai' => [89, 85, 84, 86, 88],
    ],
];

foreach ($students as $student) {
    $nama = $student['nama'];
    $nilai = $student['nilai'];
    
    $totalNilai = array_sum($nilai); // array_sum untuk menjumlahkan nilai yang ada di araay

    echo "Nama: $nama, Jumlah Nilai: $totalNilai<br>";
}
?><br>
<!-- nomor 13 -->
<?php
$data = [
    ['nama' => 'andi', 'tahun' => '2008'],
    ['nama' => 'beni', 'tahun' => '2001'],
    ['nama' => 'dani', 'tahun' => '2004'],
    ['nama' => 'eko', 'tahun' => '2006']
];

foreach ($data as $person) {
    $tahun = intval($person['tahun']); // Mengonversi tahun menjadi integer

    if (($tahun % 4 == 0 && $tahun % 100 != 0) || ($tahun % 400 == 0)) {
        echo "Nama: " . $person['nama'] . ", Tahun Lahir: " . $person['tahun'] . " (Tahun Kabisat)<br>";
    }
}
?>