<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'link', 'technology', 'description', 'date_creation', 'img', 'category_id'];
   
    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function roles() {
        return $this->belongsToMany(Technology::class);
    }
}
