/*Saya Fikry Idham Dwiyana NIM 2101294 mengerjakan Latihan 2
dalam mata kuliah Desain dan Pemrograman Berorientasi Objek 
untuk keberkahanNya maka saya tidak melakukan kecurangan 
seperti yang telah dispesifikasikan. Aamiin.*/

//inisialisasi class Product
class Product
{
	//atribut
	private String idProduct;
	private String name;
	private String brand;
	private String price;

	//constructor
	public Product()
	{
		this.idProduct = "";
		this.name = "";
		this.brand = "";
		this.price = "";
	}

	//kumpulan method untuk class Product (setter dan getter)
	public void setId(String idProduct)
	{
		this.idProduct = idProduct;
	}

	public String getId()
	{
		return this.idProduct;
	}

	public void setName(String name)
	{
		this.name = name;
	}

	public String getName()
	{
		return this.name;
	}

	public void setBrand(String brand)
	{
		this.brand = brand;
	}

	public String getBrand()
	{
		return this.brand;
	}

	public void setPrice(String price)
	{
		this.price = price;
	}

	public String getPrice()
	{
		return this.price;
	}

	//pada java tidak memerlukan destructor karena sudah garbage collection
}


