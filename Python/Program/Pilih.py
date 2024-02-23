# Saya Fikry Idham Dwiyana NIM 2101294 mengerjakan Latihan 2
# dalam mata kuliah Desain dan Pemrograman Berorientasi Objek 
# untuk keberkahanNya maka saya tidak melakukan kecurangan 
# seperti yang telah dispesifikasikan. Aamiin.

# import library
from Product import Shirt

# inisialisasi class Pilih
class Pilih:
	# constructor
	def __init__(self):
		pass

	# method untuk menambahkan data
	def add(baju):
		j = 0

		# inputan untuk data Product
		print("Masukkan Id:", end="")
		id = str(input())
		print("Masukkan Nama:", end="")
		name = str(input())
		print("Masukkan Brand:", end="")
		brand = str(input())
		print("Masukkan Harga:", end="")
		price = str(input())
		print("Masukkan Size:", end="")
		size = str(input())
		print("Masukkan Bahan:", end="")
		material = str(input())
		print("Masukkan Gender:", end="")
		gender = str(input())
		print("Masukkan Warna:", end="")
		color = str(input())
		print("Masukkan Jenis Lengan:", end="")
		sleeve_type = str(input())

		# perulangan untuk pengecekan apakah data sudah tersedia (berdasarkan id)
		for shirt in baju:
			# jika data sudah tersedia maka data tidak diinput ke list
			if(id == shirt.getId()):
				j = 1
				print("\nTidak dapat menambahkan data, ID sudah tersedia!")

		# jika data tidak tersedia
		if(j == 0):
			# instance object menggunakan class Shirt
			temp = Shirt()
			# set data ke object
			temp.setId(id)
			temp.setName(name)
			temp.setBrand(brand)
			temp.setPrice(price)
			temp.setSize(size)
			temp.setMaterial(material)
			temp.setGender(gender)
			temp.setColor(color)
			temp.setSleeve(sleeve_type)

			# push object ke list
			baju.append(temp)
			print("\nData berhasil ditambahkan!")

	# method untuk menampilkan data
	def show(baju):
		# output
		print("\nList Product:")
		print("========================================")
		i = 0
		for shirt in baju:
			print(str(i + 1))
			print("ID                : " + shirt.getId())
			print("Nama              : " + shirt.getName())
			print("Brand             : " + shirt.getBrand())
			print("Harga             : " + shirt.getPrice())
			print("Ukuran            : " + shirt.getSize())
			print("Material          : " + shirt.getMaterial())
			print("Gender            : " + shirt.getGender())
			print("Warna             : " + shirt.getColor())
			print("Jenis Lengan     : " + shirt.getSleeve())
			print("----------------------------------------")
			i += 1
