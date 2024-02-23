# LP2DPBO2024C2

### Saya Fikry Idham Dwiyana NIM 2101294 mengerjakan Latihan 2 dalam mata kuliah Desain dan Pemrograman Berorientasi Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

## Deskripsi Tugas
Buatlah program berbasis OOP menggunakan bahasa pemrograman C++, Java, Python, dan PHP yang mengimplementasikan konsep Multi-level Inheritance  pada kelas - kelas tersebut:
* Product: idProduct, name, brand, price
* Clothing: size, material, gender
* Shirt: color, sleeve_type
## Desain Program
Program didesain menjadi empat class
* **Product**
* **Clothing**
* **Shirt**
* **Pilih**

Class `Product` memiliki child yaitu class `Clothing` karena Clothing  dan Product merupakan objek yang sama, Clothing termasuk Product, tetapi tidak semua Product adalah Clothing  sehingga relasinya tidak dapat dibalik. Class `Clothing` memiliki child yaitu class `Shirt` karena Shirt merupakan Clothing , tapi tidak semua Clothing  merupakan Shirt (Clothing  terdiri dari Shirt, Celana, Topi DLL) maka relasinya tidak dapat dibalik. Maka dengan relasi seperti itu class `Shirt` menjadi cucu dari class `Product` karena merupakan objek yang sama juga, Shirt masuk kedalam Product.

Desain relasi algoritma menggunakan class diagram:

![Desain Program LP2](https://github.com/FikryIdhamD/LP2DPBO2024C2/assets/147605722/51522751-3b99-459b-a379-6a0b58abd7e5)

Pada class `Product` terdapat 4 atribut:
* **idProduct** -> berisi id product, `string`
* **name** -> berisi nama product, `string`
* **brand** -> berisi brand product, `string`
* **price** -> berisi harga product, `string`

tiap atribut memiliki setter dan getternya masing-masing.

Pada class `Clothing` yang merupakan child dari class `Product` maka mewarisi atribut dan method dari parentnya juga dengan tambahan atribut sebagai berikut:
* **size** -> berisi ukuran product, `string`
* **material** -> berisi bahan product, `string`
* **gender** -> berisi gender untuk productnya, `string`

Pada class `Shirt` yang merupakan child dari class `Clothing` dan cucu dari class `Product` maka mewarisi atribut dan method dari keduanya dengan tambahan atribut sebagai berikut:
* **color** -> berisi warna product, `string`
* **sleeve_type** -> berisi jenis lengan product, `string`

Pada class `Pilih` terdapat dua method:
* **add** -> untuk menambahkan data
* **show** -> untuk menampilkan data

## Alur Program
Pertama program akan menampilkan menu pilihan dan user diminta untuk menginput salah satu dari ketiga pilihan dan jika program sudah selesai menjalankan perintah maka proses (inputan untuk pemilihan menu) akan dijalankan berulang sampai user menginput perintah untuk mengakhiiri program.
* masukkan (1) untuk menjalankan perintah `add`. Jika user menjalankan perintah ini maka program akan meminta user untuk menginputkan serangakian data shirt. Lalu sebelum diinput ke list, program akan melakukan pengecekan terlebih dahulu terhadap id yang akan diinput, jika id sudah tersedia di list maka program akan mengeluarkan error handling dan data tidak akan diinput ke list.
* masukkan (2) untuk menjalankan perintah `show`. Jika user menjalankan perintah ini maka program akan meng-print semua data shirt yang ada pada list.
* masukkan (3) untuk mengakhiri program

## Dokumentasi
Pada program Java
![Bukti_Java](https://github.com/FikryIdhamD/LP2DPBO2024C2/assets/147605722/b31d700c-9c1f-4e61-ab93-0c840e9c90a4)
![Bukti_Java2](https://github.com/FikryIdhamD/LP2DPBO2024C2/assets/147605722/3751de03-a955-4d91-ba02-c393d25bb2a1)

Pada program PHP
![Bukti_PHP](https://github.com/FikryIdhamD/LP2DPBO2024C2/assets/147605722/5b037f49-4694-4ce8-86f5-0fb61f6e9634)
