<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
  protected $fillable= [
    'author',
    'desc'
  ];
  public function posts() {

      return $this -> belongsToMany(Post::class);
  }
}
