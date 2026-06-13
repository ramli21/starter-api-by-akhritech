<?php

namespace App\Http\Controllers\Sumin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Display a listing of the users.
     */
    public function index(Request $request): View
    {
        $users = User::orderBy('created_at', 'desc')->paginate(10);

        return view('sumin.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new user.
     */
    public function create(): View
    {
        return view('sumin.users.create');
    }

    /**
     * Store a newly created user in storage.
     */
    public function store(StoreUserRequest $request): RedirectResponse
    {
        $data = $request->validated();

        // Use Eloquent create (UsesUuid trait will set id if configured)
        User::create($data);

        return redirect()->route('sumin.users.index')->with('success', 'User created.');
    }

    /**
     * Display the specified user.
     */
    public function show(User $user): View
    {
        return view('sumin.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified user.
     */
    public function edit(User $user): View
    {
        return view('sumin.users.edit', compact('user'));
    }

    /**
     * Update the specified user in storage.
     */
    public function update(UpdateUserRequest $request, User $user): RedirectResponse
    {
        $data = $request->validated();

        // If password left empty, remove it from data
        if (empty($data['password'])) {
            unset($data['password']);
        }

        $user->fill($data);
        $user->save();

        return redirect()->route('sumin.users.index')->with('success', 'User updated.');
    }

    /**
     * Remove the specified user from storage.
     */
    public function destroy(User $user): RedirectResponse
    {
        $user->delete();

        return redirect()->route('sumin.users.index')->with('success', 'User deleted.');
    }
}
