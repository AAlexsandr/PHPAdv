<?php
use app\model\{Product, Users};
use app\engine\Db;

include "../engine/Autoload.php";

spl_autoload_register([new Autoload(), 'loadClass']);

//TODO придумайте способ не создавать несколько раз Db()

$product = new Product(new Db());
echo $product->getOne(2);

$users = new Users(new Db());
echo $users->getAll();

var_dump($product);
var_dump($users);

function foo(IModel $model) {

}