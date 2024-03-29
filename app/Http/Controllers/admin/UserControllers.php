<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Responses\CustomRegisterRedirectResponde;
use App\Models\admin\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Laravel\Fortify\Fortify;

class UserControllers extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.users.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.users.edit');
    }

    /**
     * Store a newly created r  esource in storage.
     */
    public function store(Request $request, User $user)
    {
        $request->validate([
            'email' => 'required|unique:users|max:255',
            'name' => 'required',
            'password' => 'required|confirmed',
        ]);

        if (config('fortify.lowercase_usernames')) {
            $request->merge([
                Fortify::username() => Str::lower($request->{Fortify::username()}),
            ]);
        }

        event(new Registered($user->create($request->all())));

        return app(CustomRegisterRedirectResponde::class);
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return redirect()->route('users.index');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('dashboard.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $rules = [
            'email' => 'required|email|max:255|unique:users,email,'.$user->id,
            'name' => 'required',
        ];

        if ($request->has('password')) {
            $rules['password'] = 'nullable|confirmed';
        }

        $request->validate($rules);

        $user->update([
            'email' => $request->email,
            'name' => $request->name,
            'active' => 1,
            'password' => $request->password ? bcrypt($request->password) : $user->password,
        ]);

        return redirect()->route('users.index')->banner('Usuário atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
