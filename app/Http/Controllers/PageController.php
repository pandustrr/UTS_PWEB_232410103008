<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if ($request->password === '123') {
            session(['username' => $request->username]);
            return redirect()->route('dashboard');
        }

        return back()->withErrors([
            'password' => 'Password salah. Gunakan password: 123',
        ])->onlyInput('username');
    }

    public function dashboard()
    {
        if (!session()->has('username')) {
            return redirect()->route('login');
        }

        $username = session('username');
        return view('dashboard', compact('username'));

    }

    public function profile()
    {
        if (!session()->has('username')) {
            return redirect()->route('login');
        }

        $username = session('username');
        return view('profile', compact('username'));
    }

    public function pengelolaan()
    {
        if (!session()->has('username')) {
            return redirect()->route('login');
        }

        $widgets = [
            ['id' => 1, 'name' => 'Kopi Hitam', 'category' => 'Minuman', 'price' => 15000, 'jumlah' => 15],
            ['id' => 2, 'name' => 'Latte', 'category' => 'Minuman', 'price' => 25000, 'jumlah' => 8],
            ['id' => 3, 'name' => 'Cappuccino', 'category' => 'Minuman', 'price' => 25000, 'jumlah' => 0],
            ['id' => 4, 'name' => 'Chicken Katsu', 'category' => 'Makanan', 'price' => 20000, 'jumlah' => 12],
            ['id' => 5, 'name' => 'Sambal ijo', 'category' => 'Makanan', 'price' => 30000, 'jumlah' => 5],
        ];

        return view('pengelolaan', [
            'widgets' => $widgets,
            'username' => session('username', 'Admin')
        ]);
    }

    public function logout()
    {
        session()->forget('username');
        return redirect('/login');
    }
}
