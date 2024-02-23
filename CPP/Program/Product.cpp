/*Saya Fikry Idham Dwiyana NIM 2101294 mengerjakan Latihan 2
dalam mata kuliah Desain dan Pemrograman Berorientasi Objek 
untuk keberkahanNya maka saya tidak melakukan kecurangan 
seperti yang telah dispesifikasikan. Aamiin.*/

//import library
#include <iostream>
#include <string>

using namespace std;

//inisialisasi class Product (sebagai base class / parent class utama)
class Product
{
	//atribut
	private:
		string idProduct;
		string name;
		string brand;
		string price;

	public:
		//constructor
		Product()
		{
			//default value
			this->idProduct = "";
			this->name = "";
			this->brand = "";
			this->price = "";
		}

		//kumpulan method setter dan getter untuk tiap atribut (dibuat setter dan getter karena atribut bersifat private)
		void setId(string idProduct)
		{
			this->idProduct = idProduct;
		}

		string getId()
		{
			return this->idProduct;
		}

		
		void setName(string name)
		{
			this->name = name;
		}

		string getName()
		{
			return this->name;
		}

		
		void setBrand(string brand)
		{
			this->brand = brand;
		}

		string getBrand()
		{
			return this->brand;
		}

		void setPrice(string price)
		{
			this->price = price;
		}

		string getPrice()
		{
			return this->price;
		}

		//destructor
		~Product()
		{
		}
};

//inisialisasi class Clothing sebagai child dari class Product
class Clothing : public Product
{
	//atribut
	private:
		string size;
		string material;
		string gender;

	public:
		//constructor
		Clothing()
		{
			this->size = "";
			this->material = "";
			this->gender = "";
		}

		//kumpulan method setter dan getter untuk tiap atribut
		void setSize(string size)
		{
			this->size = size;
		}

		string getSize()
		{
			return this->size;
		}

		
		void setMaterial(string material)
		{
			this->material = material;
		}

		string getMaterial()
		{
			return this->material;
		}

		void setGender(string gender)
		{
			this->gender = gender;
		}

		string getGender()
		{
			return this->gender;
		}

		//destructor
		~Clothing()
		{
		}
};

//inisialisasi class Shirt sebagai child dari class Clothing, Cucu dari class Product
class Shirt : public Clothing
{
	//atribut
	private:
		string color;
		string sleeve_type;

	public:
		//constructor
		Shirt()
		{
			this->color = "";
			this->sleeve_type = "";
		}

		//kumpulan method setter dan getter untuk tiap atribut
		void setColor(string color)
		{
			this->color = color;
		}

		string getColor()
		{
			return this->color;
		}

		
		void setSleeve(string sleeve_type)
		{
			this->sleeve_type = sleeve_type;
		}

		string getSleeve()
		{
			return this->sleeve_type;
		}
		
		//destructor
		~Shirt()
		{
		}
};