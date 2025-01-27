<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_management;

class UsersController extends Controller
{
    public function index(){
        $data = [
            'records' => User_management::paginate(1)
        ];
        //return view('db.index',$data);
        return view('db.user_management_index',$data);

    }
    public function create(){
        return view('db.user_management_create');
    }
    
    public function store(Request $req){

        $input = $req->validate([
            'user_name' =>'required | string',
            'password' => 'required | string | max:200'
        ]);
        $article= new User_management();
        $article ->user_name = $req ->user_name;
        $article ->password = $req ->password;
        $article ->save();
        $data=[
            'user_name' =>  $req ->user_name,
            'password' => $req ->password
        ];
        return view('db.user_management_store',$data);
    }
}
