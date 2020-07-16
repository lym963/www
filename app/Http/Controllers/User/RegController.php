<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Model\UserModel;
use Illuminate\Http\Request;

class RegController extends Controller
{
    //注册
    public function reg(){
        return view("reg.index");
    }
    //执行注册
    public function regdo(){
        //接值
        $data=request()->except("_token");
        //加密密码
        $data["user_pwd"]=password_hash($data["user_pwd"],PASSWORD_DEFAULT);
        $res=UserModel::create($data);
        if($res){
            return redirect("user/login");
        }else{
            echo "注册失败";
            header("refresh:1;url=reg");
        }
    }
}
