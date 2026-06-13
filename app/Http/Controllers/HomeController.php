<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

        // Restrict dashboard to superadmin users
        $this->middleware(function ($request, $next) {
            $user = $request->user();

            if ($user && $user->role === 'superadmin') {
                return $next($request);
            }

            abort(403);
        });
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $users = User::orderBy('created_at', 'desc')->paginate(5);

        return view('home', compact('users'));
    }
}
