<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    protected $fillable = ['name' , 'description'];
    protected $primaryKey = 'id';
    public  $timestamp = false;
}
