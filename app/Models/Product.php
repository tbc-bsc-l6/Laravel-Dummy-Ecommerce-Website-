<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function scopeSearch($query, array $filters){
        if($filters['search'] ?? false){
            $query
                ->where('title', 'like', '%' . request('search') . '%')
                ->orWhere('name', 'like', '%' . request('search') . '%');
        }
    }
}
