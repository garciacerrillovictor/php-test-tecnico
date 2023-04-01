<?php
 
namespace App\Models;
 
use Illuminate\Database\Eloquent\Model;
 
class Sub extends Model
{
    protected $table = 'subs';

    protected $primaryKey = 'sub_id';
    protected $fillable = ['name', 'address', 'email', 'description'];
}