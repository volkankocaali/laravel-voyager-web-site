<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function children(){
        return $this->hasMany( self::class, 'parent_id', 'id' );
    }
    public function parent(){
        return $this->hasOne( self::class, 'id', 'parent_id' );
    }
    public function pages(){
        return $this->hasMany(Post::class,'category_id','id')->where('status','PUBLISHED')->orderBy('id');
    }
}
