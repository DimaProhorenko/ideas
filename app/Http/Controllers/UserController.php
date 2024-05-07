<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        $ideas = $user->ideas()->paginate(5);
        return view('users.show', ['user' => $user, 'ideas' => $ideas]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('users.edit', ['user' => $user,]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(User $user)
    {
        $validated = request()->validate([
            'name' => 'required|min:3|max:45',
            'bio' => 'min:1|max:255',
            'image' => 'image'
        ]);

        if (request()->has('image')) {
            $imagePath = request()->file('image')->store('profile', 'public');
            $validated['image'] = $imagePath;
        }

        $user->update($validated);

        return redirect()->route('profile')->with('success', 'Profile updated');
    }

    public function profile()
    {
        return $this->show(auth()->user());
    }
}
