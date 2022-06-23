<?php
namespace App\Models;

use Crocodic\LaravelModel\Core\Model;

class CartsModel extends Model
{
    
	public $id;
	public $products_id;
	public $customers_id;
	public $created_at;
	public $updated_at;

}