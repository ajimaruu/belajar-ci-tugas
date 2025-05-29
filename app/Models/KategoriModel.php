<?php 
namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
	protected $table = 'kategori_produk'; 
	protected $primaryKey = 'id';
	protected $allowedFields = [
		'nama','harga','created_at','updated_at'
	];  
}