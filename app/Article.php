<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

//method belongsTo pour le foreignkey
    public function user(){
        return $this->belongsTo('App\User', 'id_user');
    }
}
