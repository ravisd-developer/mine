<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB; 
class UserModel extends Model
{

    public static function getallData(){
        $email = DB::table('user')->get()->toArray();
        return $email;
    }

    public static function insertURL($data){
        $u_url = $data['url'];
        $randomNum=substr(str_shuffle("0123456789abcdefghijklmnopqrstvwxyzABCDEFGHIJKLMNOPQRSTVWXYZ"), 0, 6);
        $id = DB::table('urlshortener')->insertGetId(['user_url' =>$u_url, 'generated_url' =>$randomNum]  );
        return $id;
    }

}