<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //table name
    protected $table = 'posts';
    //primary key
    public $primaryKey = 'id';
    //time stamps
    public $timestamps = true;

    public function answers()
    {
        return $this->hasMany('App\Answer');
    }

}
