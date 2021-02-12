<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

protected $appends=[
  'parent',
];

    use HasFactory;

    #One to Many/Belongs To
    public function habers(){
        return $this->hasMany(Haber::class);
    }

    protected function parent(){
        return $this->belongsTo(Category::class, 'parent_id');
    }

    public function children(){
        return $this->hasMany(Category::class, 'parent_id');
    }

}
