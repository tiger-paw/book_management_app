<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Department;


class UsersController extends Controller
{
    public function user_management_index()
    {
        return view('index');
    }
    //社員情報の一覧表示
    public function index()
    {
        $data = [
            'records' => User::paginate(10)
        ];
        //return view('db.index',$data);
        return view('db.user_management_index', $data);
    }
    //社員情報の登録
    public function create()
    {
        return view('db.user_management_create');
    }

    //登録画面の表示
    public function store(Request $req)
    {

        $users = new User();
        $users->u_name = $req->u_name;
        $users->password = $req->password;
        $users->d_id = $req->d_id;
        $users->user_code = $req->user_code;

        $users->save();
        $data = [
            'u_id' => $users->u_id,
            'u_name' =>  $req->u_name,
            'password' => $req->password,
            'd_id' => $req->d_id,
            'user_code' => $req->user_code
        ];
        return view('db.user_management_store', $data);
    }
    //社員の削除情報の入力・入力後の確認
    public function erase(Request $req)
    {
        if ($req->isMethod('get')) {
            return view('db.user_management_erase');
        } elseif ($req->isMethod('post')) {
            $u_id = $req->u_id;
            $data = [
                'record' => User::find($u_id)
            ];
            return view('db.user_management_erase', $data);
        } else {
            redirect('db.user_management_erase');
        }
    }
    //社員の削除完了の画面

    public function delete(Request $req)
    {
        $users = User::find($req->u_id);
        $users->delete();
        $data = [
            'u_id' => $req->u_id,
            'u_name' =>  $req->u_name,
            'password' => $req->password,
            'd_id' => $req->d_id,
            'user_code' => $req->user_code
        ];
        return view('db.user_management_delete', $data);
    }
}
