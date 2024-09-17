<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contacts extends Model
{
    use HasFactory;
    protected $fillable = [
        'category_id',
        'first_name', 
        'last_name',
        'gender', 
        'email', 
        'tell', 
        'address',
        'building',
        'detail'];

    public function categories()
    {
        return $this->belongsTo(Categories::class);
    }
}
