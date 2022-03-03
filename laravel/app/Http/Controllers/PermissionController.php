<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function userPermission()
    {

        // $this->authorize('view-as-admin');
        // dd(auth()->user()->roles->contains('name','admin'));

        $permissions = auth()->user()->roles->load('permissions');

        $response = [
            'roles' => $permissions
        ];

        // dd($response);

        return response($response, 200);
    }
}
