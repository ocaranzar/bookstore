<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatePasswordRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class PasswordChangeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \App\Http\Requests\UpdatePasswordRequest  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function __invoke(UpdatePasswordRequest $request, User $user)
    {
        if (Hash::check($request->old_password, $user->password)) {
            $user->update([
                "password" => $request->password,
            ]);
        }

        return redirect()->route("profile.edit", strtolower($user->username));
    }
}
