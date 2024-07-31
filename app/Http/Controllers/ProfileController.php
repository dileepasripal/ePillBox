<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest; // Import the Form Request
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function edit()
    {
        return view('profile.edit', [
            'user' => Auth::user() // Pass the authenticated user to the view
        ]);
    }

    public function update(ProfileUpdateRequest $request)
    {
        $user = Auth::user();
        $user->fill($request->validated()); // Fill the model with the validated data
        $user->save(); // Save the changes to the database

        return redirect()->route('profile.edit')->with('status', 'profile-updated');
    }

    public function destroy()
    {
        $user = Auth::user();
        // (Add any necessary logic before deleting the user, e.g., deleting associated data)
        
        Auth::logout(); // Log the user out
        $user->delete();

        return redirect('/'); // Redirect to the homepage or login page after deletion
    }
}
