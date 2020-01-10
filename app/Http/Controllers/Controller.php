<?php

namespace App\Http\Controllers;
use App\models\UserModel;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class UserController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        $data =  UserModel::getallData();
        if($data== null){
            $data = 1 ;
        }
        return view('sections.projects');
    }
    
   
}
