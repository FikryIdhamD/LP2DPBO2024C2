/*Saya Fikry Idham Dwiyana NIM 2101294 mengerjakan Latihan 2
dalam mata kuliah Desain dan Pemrograman Berorientasi Objek 
untuk keberkahanNya maka saya tidak melakukan kecurangan 
seperti yang telah dispesifikasikan. Aamiin.*/


//inisialisasi class Clothing yang merupakan child dari class Product
class Clothing extends Product
{
	//atribut
	private String size;
	private String material;
	private String gender;

	//constructor
	public Clothing()
	{
		this.size = "";
		this.material = "";
		this.gender = "";
	}

	//kumpulan method untuk class Clothing (setter dan getter)
	public void setSize(String size)
	{
		this.size = size;
	}

	public String getSize()
	{
		return this.size;
	}

	public void setMaterial(String material)
	{
		this.material = material;
	}

	public String getMaterial()
	{
		return this.material;
	}

	public void setGender(String gender)
	{
		this.gender = gender;
	}

	public String getGender()
	{
		return this.gender;
	}
}