<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\api\customer;
use Validator;

class customerController extends Controller
{
    function index(){
        $customer = customer::all();
        if(count($customer)==0){
             return ['status'=>'1','message'=>'No customer Found'];
        }
        return ['status'=>'1','message'=>'Customer Successfully fatched!!','data'=>$customer];
    }
    function search($id){
        $customer = customer::find($id);
        if(!$customer){
             return ['status'=>'0','message'=>'Something went wrong','error'=>'No such customer Found'];
        }
         return ['status'=>'1','message'=>'Customer Successfully fatched!!','data'=>$customer];
    }
    function create(Request $req){
        $rules = array(
            'name'=>'required|max:100',
            'email'=>'required|email|max:100',
            'address'=>'required|min:10|max:300',
            'phone'=>'required|numeric',
        );
        $validator = Validator::make($req->all(),$rules);
        if($validator->fails()){
            return ['status'=>'0','message'=>'Something went wrong','error'=>$validator->errors()];
        }else{
            $customer = new customer;
            $customer->name = $req->name;
            $customer->email = $req->email;
            $customer->address = $req->address;
            $customer->phone = $req->phone;
            $customer->save();
            return ['status'=>'1','message'=>'Customer Successfully added!!'];
        }
    }
    function update(Request $req,$id){
        $rules = array(
            'name'=>'required|max:100',
            'email'=>'required|email|max:100',
            'address'=>'required|min:10|max:300',
            'phone'=>'required|numeric',
        );
        $validator = Validator::make($req->all(),$rules);
        if($validator->fails()){
            return ['status'=>'0','message'=>'Something went wrong','error'=>$validator->errors()];
        }else{
            $customer = customer::find($id);
            $customer->name = $req->name;
            $customer->email = $req->email;
            $customer->address = $req->address;
            $customer->phone = $req->phone;
            $customer->update();
            return ['status'=>'1','message'=>'Customer Successfully updated!!'];
        }
    }
    function delete($id){
        $customer = customer::find($id);
        if(!$customer){
             return ['status'=>'0','message'=>'Something went wrong','error'=>'No such customer Found'];
        }
        $customer->delete();

        return ['status'=>'1','message'=>'Customer Successfully deleted!!'];
    }
}
