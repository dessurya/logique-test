<?php

namespace App\Http\Controllers;

use Dotenv\Result\Success;
use Illuminate\Http\Request;
use Models\User;

class WizardController extends Controller
{
    public function store(Request $input)
    {
        $User = User::create($input->all());
        return response()->json(200, [
            'success' => true,
            'msg' => 'Success store data',
            'user' => $User
        ]);
    }

    public function login(Request $input)
    {
        $succeess = true;
        $User = User::where('email', $input->email)->first();
        if(
            !$User
            or !Hash::check($input->password, $User->password)
        ){ $succeess = false; }

        if ($succeess == false) {
            return response()->json([
                'success' => false,
                'msg' => 'Sorry! please check your email or pasword'
            ]);
        }
        return response()->json(200, [
            'success' => true,
            'msg' => 'Success login, welcome '.$User->last_name,
            'sessionLogin' => [
                'status' => true,
                'user' => $User
            ]
        ]);
    }
}
