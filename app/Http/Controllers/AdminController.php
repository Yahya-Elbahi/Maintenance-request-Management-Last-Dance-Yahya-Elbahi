<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Symfony\Component\HttpFoundation\RedirectResponse as HttpFoundationRedirectResponse;

class AdminController extends Controller
{
    public function adminDash(){
        $users = User::whereDoesntHave('roles',function($TablewithoutAdmin){
            $TablewithoutAdmin->where('name','admin');
        })->get();
        $roles = Role::all();
        // dd($users[0]->roles());
        // $roles = Role::whereDoesntHave('roles',function($roleWithoutAdmin){
        //    $roleWithoutAdmin->where('name','admin');
        // })->get();

        
        return view('admin',compact('users','roles'));
    }
    public function destroy(Request $request, User $user)
    {
      $user->delete();
      return back();
    }
}
