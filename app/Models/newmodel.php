
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class newmodel extends Model
{
    use HasFactory;
    protected $table='velflix_test';
    protected $fillable=['name', 'category_name', 'image', 'link'];
}