<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users = [
            ['id'=>1, 'name'=>'ahmad'],
            ['id'=>2, 'name'=>'omar'], 
            ['id'=>3, 'name'=>'rami']
        ];
        // foreach($users as $user){
        //     echo $user['id'] . ',' . $user['name'] . "\n";
        // }
        return response()->json($users);
        // return response()->json(['name'=>'nour']);
    }

    public function CheckUser(int $id){
        if($id>10){
            return response()->json(['message'=>'Access Denied .ID exceeds the allowed limit '],403);
        }
        else{
            return response()->json(['message'=>'Welcome ! Your id is valid ']);
        }
    }
    
}
