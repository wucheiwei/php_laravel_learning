<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable =[
        'title',
        'description',
        'price',
        'available'
    ];
    public function store(){
        return $this->belongsTo(related:'App\Models\Store');
    }
    
    public function authors(){
        return $this->belongsToMany(related:'App\Models\Author');
    }
}
