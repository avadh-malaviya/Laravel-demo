<?php

namespace App\Http\Controllers;

use App\Http\Requests\Role\RoleRequest;
use App\Models\Role;
use App\Models\User;

class RoleController extends Controller
{
    function index()
    {
        if (check('view role')) {
            $data = Role::with('permission')->get();
            return response($data);
        } else {
            return response("unauthorised to execute the request");
        }
    }

    function store(RoleRequest $request)
    {
        if (check('add role')) {
            $role = Role::create([
                'name' => $request->name,
            ]);

            $role->permission()->attach($request->permission);

            return response("created");
        } else {
            return response("unauthorised to execute the request");
        }
    }

    function show($id)
    {
        // if (check('edit role')) {
        $data = Role::with('permission')->find($id);
        return response($data);
        // } else {
        //     return response("unauthorised to execute the request");
        // }
    }

    function update($id, RoleRequest $request)
    {
        if (check('edit role')) {
            Role::find($id)->update([
                'name' => $request->name
            ]);
            Role::find($id)->permission()->sync($request->permission);

            return response("updated");
        } else {
            return response("unauthorised to execute the request");
        }
    }

    function destroy($id)
    {
        if (check('delete role')) {
            Role::find($id)->delete();
            $user = User::where("role_id", $id)->get();
            if ($user) {
                $user->role_id = 0;
            }
            $data = Role::with('permission')->get();
            return response($data);
        } else {
            return response("unauthorised to execute the request");
        }
    }
}
