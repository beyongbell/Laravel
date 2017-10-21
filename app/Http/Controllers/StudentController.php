<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        // return view('student/index')
        //      ->with('name','Tinnakorn')
        //      ->with('surname','Choompee');

        //return view('student.index');
        //return view('student/index')->with(['name' => 'Tinnakorn','surname' => 'Choompee']);

        // return view('student/index')
        //      ->withName('Tinnakorn')
        //      ->withSurname('Choompee'); 

        $this->data = array('name' => 'Tinnakorn','surname' => 'Choompee');
        return view('student/index', $this->data);
    }

    public function play()
    {
        return view('student/profile');
    }

    public function list_student()
    {
        $list = DB::table('blog_tb')->get();
        $one  = DB::table('blog_tb')->find(1);
        dd($list);
        $aCss = array('css/list/style.css');
        $this->data = array('name' => 'Tinnakorn','surname' => '<u>Choompee</u>','style' => $aCss);
        return view('student/list', $this->data);
    }
}
