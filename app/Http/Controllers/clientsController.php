<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\models\UserModel;
use App\models\clientsModel;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;

class clientsController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
 
            public function registerCompany(Request $request){
                    $data =  $request->all();
                    
                    $cid = substr(str_replace('','',strtolower($data['name'])), 0, 4).rand(1,100);
                    $data['cid'] = $cid;
                    $data['password'] = bcrypt($data['password']);
                    $data['created_at'] =  date('Y-m-d H:i:s');
                    $data['updated_at'] =  date('Y-m-d H:i:s');
                    $newdata  = array_except($data,['_token']);
                    $validator = Validator::make($request->all(),[
                        'name'=>'required',
                        'email'=>'required|email|unique:companies,email',
                        'password'=>'required',
                        'mobile'=>'required|min:10|numeric',
                       
                    ]);
                    if($validator->fails()){
                        return 0;
                    }
                    else {
                        $id = DB::table('companies')->insertGetId($newdata);
                        $company_id = DB::table('companies')->select('cid')->where('id', $id)->get();
                        if($id){
                            Schema::create($company_id[0]->cid, function (Blueprint $table) {
                                $table->bigIncrements('id');
                                $table->string('users_name');
                                $table->string('password');
                                $table->timestamps();
                            });
                            }
                           // return $company_id;
                    }
                    return 1;
            }

            public function home(Request $request){
                // $email = request('email');
                // $password = request('password');
                $data = $request->all();
                $validator = Validator::make($request->all(), [
                    'email' => 'required|email',
                    'password' => 'required',
                ]);
                if($validator->fails()){
                    
                    return redirect()->back()->withErrors($validator)->withInput();
                    
                }
               
                else {
                   
                        $validateModel = clientsModel::logivalidate($data);
                        if($validateModel != 0 ){
                             $id = Session::get('client_id');
                          
                             return view('clients.home')->with('clients', $validateModel);
                            //  return redirect('/client_home/data')->withData('clients',$validateModel);
                        }
                        else {
                        return  redirect()->back()->with("error", "ninvalide");
                        }

                     }
                    }
            


            public function createTable(){
                Schema::create('urlshortener', function (Blueprint $table) {
                    $table->bigIncrements('id');
                    $table->string('user_url');
                    $table->string('generated_url');
                    $table->timestamps();
                });
                Schema::create('companies', function (Blueprint $table) {
                    $table->bigIncrements('id');
                    $table->string('name');
                    $table->string('cid');
                    $table->string('email');
                    $table->string('password');
                    $table->tinyInteger('mobile')->unique();
                    $table->timestamps();
                });
            }

}
