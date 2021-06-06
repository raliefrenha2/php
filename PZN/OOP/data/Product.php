<?php 

class Product
{
    // private string $name;
    protected $name;
    protected $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price =$price;
    }

    public function get_name()  
    {
        return $this->name;
    }

    public function get_price()
    {
        return $this->price;
    }
}



class ProductDummy extends Product
{
    public function info()
    {
        echo "Nama Produk : $this->name" .PHP_EOL; 
        echo "Harga : $this->price" .PHP_EOL; 
    }
}

// 5:15