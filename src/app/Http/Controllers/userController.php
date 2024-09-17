<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class userController extends Controller
{
  public function register(Request $request){
        $users = $request->all();
        Users::create($users);
}
    
}
