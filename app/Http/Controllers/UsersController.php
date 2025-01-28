<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User_management;

class UsersController extends Controller
{
    public function user_management_index(){
        return view('index');
    }
    public function index(){
        $data = [
            'records' => User_management::paginate(10)
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
        $user= new User_management();
        $user ->user_name = $req ->user_name;
        $user ->password = $req ->password;
        $user ->d_id = $req ->d_id;
        $user ->d_id = $req ->d_id;


        $user ->save();
        $data=[
            'user_name' =>  $req ->user_name,
            'password' => $req ->password
        ];
        return view('db.user_management_store',$data);
    }
    public function erase(Request $req){
        if($req ->isMethod('get')){
            return view('db.user_management_erase');
        }elseif($req ->isMethod('post')){
            $id= $req -> id;
            $data=[
                'record' => User_management::find($id)
            ];
            return view('db.user_management_erase',$data);
        }else{
            redirect('/');
        }
    }
}
