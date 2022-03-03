<?php 
namespace App\Models;
//use \Hadi\Database;
class Product
{
	protected $id;
	protected $title;
	protected $description;
	protected $price;
	protected $sku;
	protected $image;
	
	protected $config;
	protected $db;
	// public function __construct()
	// {
	// 	$this->config = [
	// 		'host' => 'localhost',
	// 		'name' => 'test',
	// 		'username' => 'root',
	// 		'password' => '',
	// 	];
		
	// 	$this->db = new Database();
	// 	$this->db->connect($this->config);
	// }
	// public function __destruct()
	// {
	// 	$this->db->disconnect();
	// }
    // GET METHODS
	public function getId()
	{
		return $this->id;
	}
	
	public function getTitle()
	{
		return $this->title;
	}
	
	public function getDescription()
	{
		return $this->description;
	}
	
	public function getPrice()
	{
		return $this->price;
	}
	
	public function getSku()
	{
		return $this->sku;
	}
	
	public function getImage()
	{
		return $this->image;
	}
	
    // SET METHODS
    public function setTitle(string $title)
	{
		$this->title = $title;
	}
	
	public function setDescription(string $description)
	{
		$this->description = $description;
	}
	
	public function setPrice(string $price)
	{
		$this->price = $price;
	}
	
	public function setSku(string $sku)
	{
		$this->sku = $sku;
	}
	
	public function setImage(string $image)
	{
		$this->image = $image;
	}

    // CRUD OPERATIONS
	public function create(array $data)
	{
		
	}
	
	public function read(int $id)
	{
		// $result = $this->db->query('SELECT * FROM users')->first();
		$this->title = 'My first Product: '; // . $result->name;
		$this->description = 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum ';
		$this->price = 2.56;
		$this->sku = 'MVC-SP-PHP-01';
		$this->image = 'https://via.placeholder.com/150';

		return $this;
	}
	
	public function update(int $id, array $data)
	{
		
	}
	
	public function delete(int $id)
	{
		
	}
}