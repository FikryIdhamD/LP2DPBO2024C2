# Saya Fikry Idham Dwiyana NIM 2101294 mengerjakan Latihan 2
# dalam mata kuliah Desain dan Pemrograman Berorientasi Objek 
# untuk keberkahanNya maka saya tidak melakukan kecurangan 
# seperti yang telah dispesifikasikan. Aamiin.

# import library
from Pilih import Pilih

# deklarasi list
baju = []
n = 0
flag = True

# menu pilihan (selama pilihan bukan 3)
while flag:
	# inputan untuk pilihan
	print("\nMasukkan menu (1 : Input, 2 : Tampil, 3 : Keluar):")
	n = int(input())

 	# jika pilihan 1 maka tambah data
	if(n == 1):
		Pilih.add(baju)

	# jika pilihan 2 maka tampilkan data
	if(n == 2):
		Pilih.show(baju)

	# jika pilihan 3 maka keluar dari program
	if(n == 3):
		flag = False
