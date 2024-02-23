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
