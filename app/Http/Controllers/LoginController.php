<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
           'email' => ['required', 'email'],
           'password' => ['required']
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('/')-> withErrors([
                'success' => 'Вы успешно вошли в систему!'
            ]);
        }
        return back()-> withErrors([
            'error' => 'The provided credentials do not match our records.'
        ])->onlyInput('email', 'password');
    }

    public function login()
    {
        return redirect('/')->withErrors(['error'=> 'Войдите в систему!']);
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->withErrors(['success'=> 'Вы вышли из системы!']);
    }

    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
