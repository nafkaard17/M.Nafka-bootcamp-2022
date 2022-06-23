<?php
namespace App\Models;

use Crocodic\LaravelModel\Core\Model;

class ProductsModel extends Model
{
    
	public $id;
	public $products_name;
	public $products_code;
	public $products_photo;
	public $products_price;
	public $flag;
	public $description;
	public $created_at;
	public $updated_at;

}