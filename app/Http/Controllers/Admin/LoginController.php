<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\UserModel;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //登陆
    public function login(){
        return view("admin.login.index");
    }
    //注册
    public function logindo(){
        //接值
        $data=request()->except("_token");
        //查询这个用户
        $res=UserModel::where("user_name",$data["user_name"])->first();
        //判断是否存在
        if($res){
            //解密判断是否为true
            $pwd=password_verify($data["user_pwd"],$res->user_pwd);
            if($pwd==true){
                session(["user"=>$data]);
                return redirect("admin/index");
            }
        }
        echo "账号或密码错误";
        header("refresh:3;url=login");
    }
}
