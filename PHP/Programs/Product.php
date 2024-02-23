<!-- Saya Fikry Idham Dwiyana NIM 2101294 mengerjakan Latihan 2
dalam mata kuliah Desain dan Pemrograman Berorientasi Objek 
untuk keberkahanNya maka saya tidak melakukan kecurangan 
seperti yang telah dispesifikasikan. Aamiin. -->

<?php

//inisialisasi class Product (sebagai base class / parent class utama)
class Product
{
	//atribut
	private $idProduct = "";
	private $name = "";
	private $brand = "";
	private $price = "";

	//constructor
	public function __construct($idProduct = "", $name = "", $brand = "", $price = "")
	{
		$this->idProduct = $idProduct;
		$this->name = $name;
		$this->brand = $brand;
		$this->price = $price;
	}

	//kumpulan method untuk setter dan getter tiap atribut
	public function setId($idProduct)
	{
		$this->idProduct = $idProduct;
	}

	public function getId()
	{
		return $this->idProduct;
	}

	public function setName($name)
	{
		$this->name = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setBrand($brand)
	{
		$this->brand = $brand;
	}

	public function getBrand()
	{
		return $this->brand;
	}

	public function setPrice($price)
	{
		$this->price = $price;
	}

	public function getPrice()
	{
		return $this->price;
	}


	//destructor
	public function __destruct()
	{
	}
}

//inisialisasi class Clothing sebagai child dari class Product
class Clothing extends Product
{
	//atribut
	private $size = "";
	private $material = "";
	private $gender = "";

	//constructor
	public function __construct($size = "", $material = "")
	{
		$this->size = $size;
		$this->material = $material;
	}

	//kumpulan method setter dan getter untuk tiap atribut
	public function setSize($size)
	{
		$this->size = $size;
	}

	public function getSize()
	{
		return $this->size;
	}

	public function setMaterial($material)
	{
		$this->material = $material;
	}

	public function getMaterial()
	{
		return $this->material;
	}

	public function setGender($gender)
	{
		$this->gender = $gender;
	}

	public function getGender()
	{
		return $this->gender;
	}

	//destructor
	public function __destruct()
	{
	}
}

//inisialisasi class Shirt sebagai child dari class Clothing (juga "cucu" dari class Product)
class Shirt extends Clothing
{
	//atribut
	private $color = "";
	private $sleeve_type = "";
	private $image = "";

	//constructor
	public function __construct($color = "", $sleeve_type = "", $image = "")
	{
		$this->color = $color;
		$this->sleeve_type = $sleeve_type;
		$this->image = $image;
	}

	//kumpulan method setter dan getter untuk tiap atribut
	public function setColor($color)
	{
		$this->color = $color;
	}

	public function getColor()
	{
		return $this->color;
	}

	public function setSleeve($sleeve_type)
	{
		$this->sleeve_type = $sleeve_type;
	}

	public function getSleeve()
	{
		return $this->sleeve_type;
	}

	public function setImage($image)
	{
		$this->image = $image;
	}

	public function getImage()
	{
		return $this->image;
	}

	//destructor
	public function __destruct()
	{
	}
}

?>