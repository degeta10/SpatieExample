<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //  To create a role
        // $role = Role::create(['name' => 'admin']);

        //  To create a permission
        // $permission = Permission::create(['name' => 'read articles']);

        //  Assign Permissions to a Role
        // $role = Role::findById(1);
        // $permission = Permission::findById(1);
        // $permission = Permission::all();
        // $role->givePermissionTo($permission);
        // auth()->user()->assignRole($role);

        //  Assign permission to user directly
        // auth()->user()->givePermissionTo('read articles');

        //  Get list of direct permissions
        // $permissions = auth()->user->getDirectPermissions();
        // return $permissions;


        //  Get list of permissions via role
        // $permissions = auth()->user()->getPermissionsViaRoles();
        // return $permissions;

        //  Get list of all permissions
        // $permissions = auth()->user()->getAllPermissions();
        // return $permissions;

        //  Check if user has role
        return User::role('admin')->get();

        // return view('home');
    }
}
