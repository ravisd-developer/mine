<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class clientsModel extends Model
{

    public static function logivalidate($data){
         $email = $data['email'];
         $password = $data['password'];
       
        $datas = DB::table('companies')->select('*')->where('email',$email)->get();
       $hashedPassword = $datas[0]->password;
        if( $datas->isEmpty())
         {
            return 0;
        
         }
         else
          {
                $demail = $datas[0]->email;
                if (Hash::check( $password, $hashedPassword) && $demail == $email)
                {
                    $client_id = $datas[0]->id;
                    Session::put('client_id', $client_id);
                    return $data;
                        
                }
                else 
                {
                    return 0;
                }
            
          }

        }
}
