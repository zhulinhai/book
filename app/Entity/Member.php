<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    //
    protected $table = 'member';
    protected $primaryKey = 'id';
    protected $fillable=['id', 'phone'];
    protected $hidden=['password'];
    public $timestamps = false;
}
