<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $primaryKey = 'id';
    protected $table = 'posts';

    public function user(){
        // return $this->hasOne(User::class);
        return $this->belongsTo(User::class, 'author_id', 'id');
    }

    public function category(){
        // return $this->hasOne(Category::class);
        return $this->belongsTo(Category::class);
    }
}
