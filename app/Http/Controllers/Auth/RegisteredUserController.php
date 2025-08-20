<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;
use Spatie\Permission\Models\Role;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $roles = Role::all();
        return view('auth.register',compact('roles'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'user_type'=>'required|string',
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'user_type'=>$request->user_type,
            'password' => Hash::make($request->password),
        ]);
        $userRole = Role::find($request->user_type);
        $user->assignRole($userRole);   

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));

        
    }
   

    public function UserApprove(Request $request,User  $user){
        // dd($user->approved);
        $user->update([
          "approved"=>true  
        ]);
        // dd('approved');
        return back();
        // dd($request->all());
    }
}
