<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;

use function Laravel\Prompts\error;

class UserController extends Controller
{
    //

    public function index(): View
    {

        return view('user.index', [
            'users' => User::all()
        ]);
    }

    public function create(): View
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|min:3',
            'email' => 'required|unique:users',
            'password' => 'required|min:8',
        ]);

        // dd($validated);

        User::create($validated);

        return redirect()->route('user.index');
    }

    public function show(User $user): View
    {
        return view('user.show', [
            'user' => $user
        ]);
    }

    public function edit(User $user): View
    {
        return view('user.edit', [
            'user' => $user
        ]);
    }


    public function update(Request $request, User $user)
    {
        try {
            $validated = $request->validate([
                'name' => 'required|min:3',
                'email' => [
                    'required',
                    'email',
                    Rule::unique('users')->ignore($user->id),
                ],
            ]);

            $user->update(array_intersect_key($validated, $user->getAttributes()));

            return redirect()->route('user.index')->with('success', 'User updated successfully');
        } catch (ValidationException $e) {
            return redirect()->back()->withErrors($e->errors())->withInput();
        }
    }
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index');
    }
}
