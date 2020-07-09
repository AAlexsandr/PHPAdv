<?php

class Product
{
    public $id;
    public $name;
    public $price;

    public function __construct($id = null, $name = null, $price = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function say()
    {
        $this->nameProduct();

    }

    protected function nameProduct() {
        echo "<h2>{$this->name}</h2>";
        echo "<p>Цена по прайсу: {$this->price} руб</p>";
    }
}

class ProductSale extends Product
{
    public $sale;

    public function __construct($id = null, $name = null, $price = null, $sale = null)
    {
        parent::__construct($id, $name, $price);
        $this->sale = $sale;
    }

    public function calculation(ProductSale $sale1)
    {
       $sale1->sale = ($this->price-($this->price * ($this->sale / 100)));
        echo "<br>Цена со скидкой: {$sale1->sale}руб.";        
    }
    
    public function say()
    {
        parent::say();
        echo "Ваша скидка:  {$this->sale}%";
    }
}

$product1 = new Product(1, "Продукт1", 250);
$product1->say();

$product2 = new ProductSale(2, "Продукт2", 300, 10);
$product2->say();
$product2->calculation($product2);
var_dump ($product2);
