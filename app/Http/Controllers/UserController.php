<?php

namespace App\Http\Controllers;

use Exception;

use Illuminate\Http\Request;

use App\Models\User;
use App\Http\Middleware\CheckUserID;

class UserController extends Controller
{

    public function show_get($id)
    {
        try{
            $user = User::findOrFail($id);
            return view('user.profile', ['user' => $user]);
        }
        catch (Exception $e) {
            return response()->json(["message"=>"user id = {$id} not found!"], 404);
        }
    }

    public function show_post(Request $request)
    {
        try{
            $id = $request->id;
            
            $user = User::findOrFail($id);
            return view('user.profile', ['user' => $user]);
        }
        catch (Exception $e) {
            return response()->json(["message"=>"user id = {$id} not found!"], 404);
        }

    }
}
