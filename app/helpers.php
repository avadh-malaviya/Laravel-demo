<?php

use App\Models\Role;
use Illuminate\Support\Facades\Auth;

function check($req)
{
    $role = Role::find(Auth::user()->role_id)->permission()->get();

    foreach ($role as $value) {
        if ($value->name == $req) {
            return true;
        }
    }
}
