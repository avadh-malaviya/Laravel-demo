<?php

namespace App\Http\Controllers;

use App\Http\Requests\Permission\PermissionRequest;
use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    function index()
    {
        if (check('view permission')) {
            $data = Permission::get();
            return response($data);
        } else {
            return response("unauthorised to execute the request");
        }
    }

    function store(PermissionRequest $request)
    {
        if (check('add permission')) {
            Permission::create([
                'name' => $request->name
            ]);
            return response("created");
        } else {
            return response("unauthorised to execute the request");
        }
    }

    function show($id)
    {
        if (check('edit permission')) {
            $data = Permission::find($id);
            return response($data);
        } else {
            return response("unauthorised to execute the request");
        }
    }

    function update($id, PermissionRequest $request)
    {
        if (check('edit permission')) {
            Permission::where('id', $id)->update([
                'name' => $request->name
            ]);
            return response("updated");
        } else {
            return response("unauthorised to execute the request");
        }
    }

    function destroy($id)
    {
        if (check('delete permission')) {
            Permission::find($id)->delete();
            $data = Permission::get();
            return response($data);
        } else {
            return response("unauthorised to execute the request");
        }
    }
}
