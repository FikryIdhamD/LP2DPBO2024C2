<!-- Saya Fikry Idham Dwiyana NIM 2101294 mengerjakan Latihan 2
dalam mata kuliah Desain dan Pemrograman Berorientasi Objek 
untuk keberkahanNya maka saya tidak melakukan kecurangan 
seperti yang telah dispesifikasikan. Aamiin. -->

<?php
//import
require ('Pilih.php');

//deklarasi list
$data = [];
//instance object menggunakan class Pilih
$pilihan = new Pilih();

//menambahkan data
$pilihan->add($data, "111", "Keteng", "Buaya", "139999", "XL", "Plastik", "L", "Merah", "Pendek", "image/image1.png");
$pilihan->add($data, "222", "Slepet", "Unikloh", "14999", "L", "Kertas", "L", "Kuning", "Panjang", "image/image2.png");
$pilihan->add($data, "333", "YNTKTS", "KecilSekali", "129999", "XXL", "Katun", "P", "Hijau", "Panjang", "image/image3.png");
$pilihan->add($data, "444", "Apalah", "Aquados", "59999", "S", "Daun", "L", "Biru", "Pendek", "image/image1.png");

//menampilkan data
echo '<b>List Product:</b>' . '<br>';
$pilihan->show($data);

?>