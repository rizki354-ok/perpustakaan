<?php
// Menampilkan teks
echo "Hello, World!<br>";

// Variabel dan tipe data
$nama = "Alice";
$umur = 21;
$isMahasiswa = true;

// Menampilkan variabel
echo "Nama: $nama, Umur: $umur<br>";

// Percabangan
if ($umur >= 18) {
    echo "Anda sudah dewasa.<br>";
} else {
    echo "Anda masih anak-anak.<br>";
}

// Perulangan for
for ($i = 1; $i <= 5; $i++) {
    echo "Perulangan ke-$i<br>";
}

// Perulangan while
$j = 1;
while ($j <= 3) {
    echo "While loop ke-$j<br>";
    $j++;
}

// Fungsi sederhana
function sapa($nama) {
    return "Halo, $nama!<br>";
}

// Memanggil fungsi
echo sapa("Bob");
?>

