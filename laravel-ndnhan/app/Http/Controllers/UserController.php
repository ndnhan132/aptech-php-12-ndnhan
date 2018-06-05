<?php
/**
 * Created by PhpStorm.
 * User: ndnhan132
 * Date: 04/06/2018
 * Time: 21:02
 */

namespace App\Http\Controllers;


class UserController extends Controller
{
    public function show($id){
        return view(wellcome);
    }
}