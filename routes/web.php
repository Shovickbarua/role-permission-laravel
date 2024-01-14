<?php

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
$admin = User::whereName('Admin')->with('roles')->first();
// $admin_role = Role::whereName('admin')->first();

// $admin->roles()->attach($admin_role);

$add_user_permission = Permission::where('name','add_user')->first();
$admin_role = Role::whereName('admin')->with('permissions')->first();
// $admin_role->permissions()->attach($add_user_permission);
Route::get('/', function () {
    return view('welcome');
});
