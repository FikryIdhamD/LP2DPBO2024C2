/*Saya Fikry Idham Dwiyana NIM 2101294 mengerjakan Latihan 2
dalam mata kuliah Desain dan Pemrograman Berorientasi Objek
untuk keberkahanNya maka saya tidak melakukan kecurangan
seperti yang telah dispesifikasikan. Aamiin.*/

// import library
#include <bits/stdc++.h>
#include "Product.cpp"

using namespace std;

// inisialisasi class Pilih
class Pilih
{
public:
	// atribut sebagai tempat tampung inputan
	string idProduct, name, brand, price, size, material, gender, color, sleeve_type;
	int j;

	// constructor
	Pilih()
	{
	}

	// method untuk menambahkan data
	void add(list<Shirt> *llist)
	{
		// instance object menggunakan class Product
		Shirt temp;
		j = 0;

		// inputan untuk data Product
		cout << "Masukkan Id:";
		cin >> idProduct;
		cout << "Masukkan Nama:";
		cin >> name;
		cout << "Masukkan Brand:";
		cin >> brand;
		cout << "Masukkan Harga:";
		cin >> price;
		cout << "Masukkan Ukuran:";
		cin >> size;
		cout << "Masukkan Jenis Bahan:";
		cin >> material;
		cout << "Masukkan Gender:";
		cin >> gender;
		cout << "Masukkan Warna:";
		cin >> color;
		cout << "Masukkan Jenis Lengan:";
		cin >> sleeve_type;

		// perulangan untuk pengecekan
		for (list<Shirt>::iterator it = (*llist).begin(); it != (*llist).end(); it++)
		{
			// pengecekan jika ID yang diinput sama dengan ID pada list
			// ID digunakan sebagai primary key
			if (idProduct == it->getId())
			{
				// print warning bahwa data sudah tersedia
				// variabel j digunakan sebagai penanda
				j = 1;
				cout << "\nTidak dapat menambahkan data, ID sudah tersedia!" << '\n';
			}
		}

		// jika data tidak tersedia
		if (j == 0)
		{
			// set data inputan ke object tampungan yang sebelumnya telah dibuat
			temp.setId(idProduct);
			temp.setName(name);
			temp.setBrand(brand);
			temp.setPrice(price);
			temp.setSize(size);
			temp.setMaterial(material);
			temp.setGender(gender);
			temp.setColor(color);
			temp.setSleeve(sleeve_type);

			// push object tersebut ke dalam list
			(*llist).push_back(temp);
			cout << "\nData berhasil ditambahkan!" << '\n';
		}
	}

	void show(list<Shirt> *llist)
	{
		// output header
		cout << "\nList Product:\n";
		cout << "==============================================================================================================================================\n";
		cout << setw(5) << left << "No";
		cout << setw(15) << left << "Id Product";
		cout << setw(20) << left << "Nama";
		cout << setw(15) << left << "Brand";
		cout << setw(15) << left << "Harga";
		cout << setw(10) << left << "Ukuran";
		cout << setw(20) << left << "Material";
		cout << setw(15) << left << "Gender";
		cout << setw(15) << left << "Warna";
		cout << setw(20) << left << "Jenis Lengan";
		cout << "\n";
		cout << "==============================================================================================================================================\n";

		int i = 0;
		for (list<Shirt>::iterator it = (*llist).begin(); it != (*llist).end(); it++)
		{
			cout << setw(5) << left << (i + 1);
			cout << setw(15) << left << it->getId();
			cout << setw(20) << left << it->getName();
			cout << setw(15) << left << it->getBrand();
			cout << setw(15) << left << it->getPrice();
			cout << setw(10) << left << it->getSize();
			cout << setw(20) << left << it->getMaterial();
			cout << setw(15) << left << it->getGender();
			cout << setw(15) << left << it->getColor();
			cout << setw(20) << left << it->getSleeve();
			cout << "\n";
			i++;
		}
		cout << "==============================================================================================================================================\n";
	}

	// destructor
	~Pilih()
	{
	}
};