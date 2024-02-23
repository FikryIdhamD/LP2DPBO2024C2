# Saya Fikry Idham Dwiyana NIM 2101294 mengerjakan Latihan 2
# dalam mata kuliah Desain dan Pemrograman Berorientasi Objek 
# untuk keberkahanNya maka saya tidak melakukan kecurangan 
# seperti yang telah dispesifikasikan. Aamiin.

# inisialisasi class Product (sebagai base class / parent class utama)
class Product:
	# atribut
	__idProduct = ""
	__name = ""
	__brand = ""
	__price = ""

	# constructor
	def __init__(self, idProduct = "", name = "", brand = "", price = ""):
		self.__idProduct = idProduct
		self.__name = name
		self.__brand = brand
		self.__price = price

	# kumpulan method setter dan getter untuk tiap atribut
	def setId(self, idProduct):
		self.__idProduct = idProduct

	def getId(self):
		return self.__idProduct

	def setName(self, name):
		self.__name = name

	def getName(self):
		return self.__name

	def setBrand(self, brand):
		self.__brand = brand

	def getBrand(self):
		return self.__brand
	
	def setPrice(self, price):
		self.__price = price

	def getPrice(self):
		return self.__price

	#python tidak memerlukan destructor karena sudah garbage collection

# inisialisasi class Clothing sebagai child dari class Product
class Clothing(Product):
	# atribut
	__size = ""
	__material = ""
	__gender = ""

	# constructor
	def __init__(self, size = "", material = "", gender = ""):
		self.__size = size
		self.__material = material
		self.__gender = gender

	# kumpulan method setter dan getter untuk tiap atribut
	def setSize(self, size):
		self.__size = size

	def getSize(self):
		return self.__size

	def setMaterial(self, material):
		self.__material = material

	def getMaterial(self):
		return self.__material
	
	def setGender(self, gender):
		self.__gender = gender

	def getGender(self):
		return self.__gender

# inisialisasi class Shirt sebagai child dari class Clothing (juga "cucu" dari class Product)
class Shirt(Clothing):
	# atribut
	__color = ""
	__sleeve_type = ""

	# constructor
	def __init__(self, color = "", sleeve_type = ""):
		self.__color = color
		self.__sleeve_type =sleeve_type

	# kumpulan method setter dan getter untuk tiap atribut
	def setColor(self, color):
		self.__color = color

	def getColor(self):
		return self.__color

	def setSleeve(self, sleeve_type):
		self.__sleeve_type = sleeve_type

	def getSleeve(self):
		return self.__sleeve_type
