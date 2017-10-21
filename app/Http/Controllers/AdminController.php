<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class AdminController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function home()
    {
        // return view('admin.index')->with('data','Tinnakorn Choompee');
        $data = ['A', 'B', 'C'];
        return view('admin.index')
               ->with('title', 'Tinnakorn CHoompee')
               ->with('data', $data);
    }

    public function id($id)
    {
        // return view('admin.index')->with('data','Tinnakorn Choompee');
        $data = ['A', 'B', 'C'];
        return view('admin.home',compact('data','id'))->with('title', 'Tinnakorn CHoompee');
    }

    public function html()
    {
        $data = ['A', 'B', 'C'];
        $table = "<table>";
        foreach ($data as $key => $value) {
            $table .= "<tr><td>".sprintf('%02d', ++$key)."</td><td>".$value."</td></tr>";
        }
        $table .= "</table>";
        return view('admin.html', compact('data','table'));
    }

    public function getUser()
    {
        $users = DB::table('users')->get();
        $firstUser = DB::table('users')->first();
        $whereUser = DB::table('users')->where('name','bellnaja')->first();

        $name = DB::table('roles')->pluck('name');

        // dump($users); // Dark BG
        // dd($users); // Light BG
        return view('admin.user', ['users'     => $users , 
                                   'firstUser' => $firstUser, 
                                   'whereUser' => $whereUser,
                                   'roles'     => $name
                                  ]);
    }

    public function aggregate()
    {
        $users = DB::table('users')->count();
        echo "<h1>User = ".$users."</h1>";
        $max   = DB::table('users')->max('id');
        echo "<h1>Max id = ".$max."</h1>";  
        $avg   = DB::table('users')->avg('id');
        echo "<h1>Avg id = ".$avg."</h1>";    
    }

    public function join()
    {
        $users = DB::table('users')->join('roles','roles.id','=','users.role_id')
                                   ->select('users.*','roles.description')->get();
        return view('admin.join', compact('users'));
    }

    public function union()
    {
        $users = DB::table('users')->select('name');
        $union = DB::table('roles')->select('name')
                 ->orderBy('roles.name')
                 ->unionAll($users)
                 ->get();
        return view('admin.union', compact('union')); 
    }
}
