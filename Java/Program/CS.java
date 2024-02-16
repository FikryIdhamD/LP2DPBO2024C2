/*Saya Fikry Idham Dwiyana NIM 2101294 mengerjakan Latihan 2
dalam mata kuliah Desain dan Pemrograman Berorientasi Objek 
untuk keberkahanNya maka saya tidak melakukan kecurangan 
seperti yang telah dispesifikasikan. Aamiin.*/

//import library
import java.util.Scanner;
import java.util.ArrayList;

//inisialisasi class Pilih
public class CS {
	// atribut tampungan
	String idProduct;
	String name;
	String brand;
	String price;
	String size;
	String material;
	String gender;
	String color;
	String sleeve_type;
	int i, j;

	// membuat scanner
	Scanner sc = new Scanner(System.in);

	// constructor
	public CS() {
	}

	// method untuk menambahkan data
	public void add(ArrayList<Shirt> list) {
		// instance objeck menggunakan class Mahasiswa
		Shirt temp = new Shirt();
		j = 0;
		// inputan untuk data mahasiswa
		System.out.print("Masukkan Id:");
		idProduct = sc.next();
		System.out.print("Masukkan Nama:");
		name = sc.next();
		System.out.print("Masukkan Nama Brand:");
		brand = sc.next();
		System.out.print("Masukkan Harga:");
		price = sc.next();
		System.out.print("Masukkan Ukuran:");
		size = sc.next();
		System.out.print("Masukkan Bahan:");
		material = sc.next();
		System.out.print("Masukkan Gender:");
		gender = sc.next();
		System.out.print("Masukkan Warna:");
		color = sc.next();
		System.out.print("Masukkan Tipe Lengan:");
		sleeve_type = sc.next();
		// pengecekan apakah data sudah tersedia di list (berdasarkan nik)
		for (i = 0; i < list.size(); i++) {
			if (idProduct.equals(list.get(i).getId())) {
				System.out.println("\nTidak dapat menambahkan data, NIK sudah tersedia!");
				j = 1;
			}
		}

		// jika data tidak tersedia maka set inputan dan push ke list
		if (j == 0) {
			temp.setId(idProduct);
			temp.setName(name);
			temp.setBrand(brand);
			temp.setPrice(price);
			temp.setSize(size);
			temp.setMaterial(material);
			temp.setGender(gender);
			temp.setColor(color);
			temp.setSleeve_type(sleeve_type);

			list.add(temp);
			System.out.println("\nData berhasil ditambahkan!");
		}
	}

	public void show(ArrayList<Shirt> list) {
		System.out.println("\nList:");

		// Print table header
		System.out.println(
				"+-----+-------------+---------------+--------+--------+----------+--------+----------+---------------+");
		System.out.printf("| %-3s | %-11s | %-13s | %-6s | %-6s | %-8s | %-6s | %-8s | %-13s |\n",
				"No.", "Id Product", "Nama", "Brand", "Harga", "Ukuran", "Bahan", "Gender", "Warna", "Tipe Lengan");
		System.out.println(
				"+-----+-------------+---------------+--------+--------+----------+--------+----------+---------------+");

		// Print table rows
		for (int i = 0; i < list.size(); i++) {
			Shirt shirt = list.get(i);
			System.out.printf("| %-3s | %-11s | %-13s | %-6s | %-6s | %-8s | %-6s | %-8s | %-13s |\n",
					(i + 1), shirt.getId(), shirt.getName(), shirt.getBrand(), shirt.getPrice(),
					shirt.getSize(), shirt.getMaterial(), shirt.getGender(), shirt.getColor(), shirt.getSleeve_type());
		}

		// Print table footer
		System.out.println(
				"+-----+-------------+---------------+--------+--------+----------+--------+----------+---------------+");
	}
}
