<?php 

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;

class UserController extends Controller {

    public function __construct()
    {

    }

    public function index()
    {
       return "User Controller";
    }
}