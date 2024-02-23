<!-- Saya Fikry Idham Dwiyana NIM 2101294 mengerjakan Latihan 2
dalam mata kuliah Desain dan Pemrograman Berorientasi Objek 
untuk keberkahanNya maka saya tidak melakukan kecurangan 
seperti yang telah dispesifikasikan. Aamiin. -->

<?php
//import
require ('Product.php');

//inisialisasi class Pilih
class Pilih
{
	//constructor
	public function __construct()
	{
	}

	//method untuk menambahkan data
	public function add(&$list, $idProduct, $name, $brand, $price, $size, $material, $gender, $color, $sleeve_type, $image)
	{
		//instance object menggunakan class Shirt
		$baju = new Shirt();

		//set value dari parameter ke object
		$baju->setId($idProduct);
		$baju->setName($name);
		$baju->setBrand($brand);
		$baju->setPrice($price);
		$baju->setSize($size);
		$baju->setMaterial($material);
		$baju->setGender($gender);
		$baju->setColor($color);
		$baju->setSleeve($sleeve_type);
		$baju->setImage($image);

		//push object ke list / array
		array_push($list, $baju);
	}

	//method untuk menampilkan data
	public function show($list)
	{
		//output berupa tabel
		echo "<table border='1' cellspacing='0' cellpading='10' cellpadding='10'";
		echo "<tr>";
		echo "<th>No</th>";
		echo "<th>Id</th>";
		echo "<th>Nama</th>";
		echo "<th>Brand</th>";
		echo "<th>Harga</th>";
		echo "<th>Ukuran</th>";
		echo "<th>Bahan</th>";
		echo "<th>Gender</th>";
		echo "<th>Warna</th>";
		echo "<th>Warna</th>";
		echo "<th>Gambar Product</th>";
		echo "</tr>";
		$j = 1;
		$i;
		for($i = 0; $i < count($list); $i++)
		{
			echo "<tr>";
			echo  "<td>" . $j . '. ' . "</td>";
			echo "<td>" . $list[$i]->getId() . "</td>";
			echo "<td>" . $list[$i]->getName() . "</td>";
			echo "<td>" . $list[$i]->getBrand() . "</td>";
			echo "<td>" . $list[$i]->getPrice() . "</td>";
			echo "<td>" . $list[$i]->getSize() . "</td>";
			echo "<td>" . $list[$i]->getMaterial() . "</td>";
			echo "<td>" . $list[$i]->getGender() . "</td>";
			echo "<td>" . $list[$i]->getColor() . "</td>";
			echo "<td>" . $list[$i]->getSleeve() . "</td>";
			echo "<td>" . "<img src='" . $list[$i]->getImage() . "' style='width: 100px;'>" . '</td>';
			echo "</tr>";
			$j = $j + 1;
		}
		echo "</table>";
		echo "<br>";
	}

	//destructor
	public function __destruct()
	{	
	}
}

?>