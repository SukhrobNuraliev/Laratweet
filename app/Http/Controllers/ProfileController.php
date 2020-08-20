<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Validation\Rule as ValidationRule;

class ProfileController extends Controller
{
    public function show(User $user)
    {
        return view('profiles.show', [
            'user' => $user,
            'tweets' => $user->tweets()->withLikes()->paginate(50),
        ]);
    }

    public function edit(User $user)
    {
        abort_if($user->isNot(current_user()), 404);

        return view('profiles.edit', compact('user'));
    }
   
    public function update(User $user)
    {
        $attributes = request()->validate([
            'username' => ['string', 'required', 'max:255', ValidationRule::unique('users')->ignore($user)],
            'name' => ['string', 'required', 'max:255',],
            'avatar' => ['file'],
            'email' => ['string', 'required', 'max:255', 'email', ValidationRule::unique('users')->ignore($user),],
            'password' => ['string', 'required', 'max:255', 'min:8', 'confirmed'],
        ]);

        if (request('avatar')) {
            $attributes['avatar'] = request('avatar')->store('avatars');
        }

        $user->update($attributes);

        return redirect($user->path());
    }
}
