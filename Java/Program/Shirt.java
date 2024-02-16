/*Saya Fikry Idham Dwiyana NIM 2101294 mengerjakan Latihan 2
dalam mata kuliah Desain dan Pemrograman Berorientasi Objek 
untuk keberkahanNya maka saya tidak melakukan kecurangan 
seperti yang telah dispesifikasikan. Aamiin.*/


//inisialisasi class Shirt yang merupakan child dari class Clothing
class Shirt extends Clothing
{
	//atribut
	private String color;
	private String sleeve_type;

	//constructor
	public Shirt()
	{
		this.color = "";
		this.sleeve_type = "";
	}

	//kumpulan method untuk class Shirt (setter dan getter)
	public void setColor(String color)
	{
		this.color = color;
	}

	public String getColor()
	{
		return this.color;
	}

	public void setSleeve_type(String sleeve_type)
	{
		this.sleeve_type = sleeve_type;
	}

	public String getSleeve_type()
	{
		return this.sleeve_type;
	}
}