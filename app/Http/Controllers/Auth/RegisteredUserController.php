<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Jobs\UserRegistration;
use App\Models\Role;
use App\Models\RoleUser;
use App\Models\User;
use App\Models\UserInterest;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $roles = Role::cursor();

        return view('auth.register', compact('roles'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required','max:50','string', 'min:3'],
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->status = 1;
        $user->save();

        $interests = $request->interests;

        if (count($interests) > 0) {
            foreach ($interests as $interest) {
                $userInterest = new UserInterest();
                $userInterest->user_id = $user->id;
                $userInterest->interest = $interest;
                $userInterest->save();
            }
        }

        $details['name'] = $user->name;
        $details['email'] = $user->email;
        $details['password'] = $request->password;

        $roles = $request->roles;

        if (count($roles) > 0) {
            foreach ($roles as $role) {
                $roleUser = new RoleUser();
                $roleUser->user_id = $user->id;
                $roleUser->role_id = $role;
                $roleUser->save();
            }
        }

        dispatch(new UserRegistration($details));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
