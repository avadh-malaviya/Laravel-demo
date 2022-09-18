<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    function login(Request $request)
    {

        $user = User::with("role")->where('email', $request->email)->first();

        if (!$user || !Hash::check($request->password, $user->password)) {
            return response([
                'message' => ['Please enter correct email and password']
            ], 404);
        }

        $token = $user->createToken('token')->plainTextToken;
        $response = [
            'user' => $user,
            'token' => $token
        ];

        return response($response, 201);
    }

    function register(UserRequest $request)
    {
        $data = User::create([
            "role_id" => 2,
            "name" => $request->name,
            "email" => $request->email,
            "password" => Hash::make($request->password)
        ]);

        return response("created");
    }

    function index()
    {
        if (check('view user')) {
            $data = User::with("role")->get();
            return response($data);
        } else {
            return response("unauthorised to execute the request");
        }
    }

    function store(UserRequest $request)
    {
        if (check('add user')) {
            User::create([
                "role_id" => $request->role,
                "name" => $request->name,
                "email" => $request->email,
                "password" => Hash::make($request->password)
            ]);
            return response("created");
        } else {
            return response("unauthorised to execute the request");
        }
    }

    function show($id)
    {
        if (check('edit user')) {
            $data = User::with("role")->find($id);
            return response($data);
        } else {
            return response("unauthorised to execute the request");
        }
    }

    function update($id, UserRequest $request)
    {
        if (check('edit user')) {
            User::find($id)->update([
                "role_id" => $request->role,
                "name" => $request->name,
                "email" => $request->email,
            ]);

            return response("updated");
        } else {
            return response("unauthorised to execute the request");
        }
    }

    function getUser()
    {
        $data = User::with("role")->find(Auth::user()->id);
        return response($data);
    }

    function destroy($id)
    {
        if (check('delete user') && $id != Auth::user()->id) {
            User::find($id)->delete();
            $data = User::with("role")->get();
            return response($data);
        } else {
            return response("unauthorised to execute the request");
        }
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response('logout');
    }
}
