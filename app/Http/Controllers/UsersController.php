<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\U_id;
use App\Models\D_id;


class UsersController extends Controller
{
    public function user_management_index(){
        return view('index');
    }
    public function index(){
        $data = [
            'records' => U_id::all()
        ];
        //return view('db.index',$data);
        return view('db.user_management_index',$data);

    }
    public function create(){
        return view('db.user_management_create');
    }
    
    public function store(Request $req){

        $user= new U_id();
        $user ->user_name = $req ->user_name;
        $user ->password = $req ->password;
        $user ->d_id = $req ->d_id;
        $user ->user_code = $req ->user_code;

        $user ->save();
        $data=[
            'user_name' =>  $req ->user_name,
            'password' => $req ->password,
            'd_id' => $req ->d_id,
            'usercode' => $req ->usercode
        ];
        return view('db.user_management_store',$data);
    }
    public function erase(Request $req){
        if($req ->isMethod('get')){
            return view('db.user_management_erase');
        }elseif($req ->isMethod('post')){
            $id= $req -> id;
            $data=[
                'record' => U_id::find($id)
            ];
            return view('db.user_management_erase',$data);
        }else{
            redirect('/');
        }
    }
}
