<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;

class ModelController extends Controller
{
    public function getRole()
    {
        //dump(Role::all());
        foreach(Role::all() as $role){
            echo $role->name;
        }
    }

    public function rolewhere()
    {
        $roles = Role::where('id', ">", 2)->orderBy('name','DESC')->get();
        foreach ($roles as $role) {
            echo $role->name."<br>";
        }
    }

    public function chunk()
    {
        Role::chunk(100, function($roles){
            foreach ($roles as $key => $value) {
                echo $value->name."<br>";
            }
        });
        // DATA 100 rows
    }
}
