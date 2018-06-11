<?php
/**
 * Created by PhpStorm.
 * User: ndnhan132
 * Date: 04/06/2018
 * Time: 21:02
 */

namespace App\Http\Controllers;
use App\User;

class UserController extends Controller
{
    public function show(){
    }

    public function blog(){
        return view('blog');
    }
    public  function getUser($id){
        $user= USER::select()->get()->first();
        return $user;
    }
    public  function showTable(){
        $user =User::all();
        return view('table', ['users'=> $user]);
    }
}
