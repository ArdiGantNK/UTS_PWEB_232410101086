<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login() {
        return view('login');
    }
    public function home()
    {
        return view('welcome');
    }

    public function YukLogin(Request $request)
    {
        $validated = $request->validate([
            'Username' => 'required|string',
            'password' => 'required|min:6',
        ]);

        $validUsername = 'Aurizal123';
        $validPassword = 'Aurizal123';

        if ($request->Username === $validUsername && $request->password === $validPassword) {
            session([
                'authenticated' => true,
                'user_Username' => $request->Username,
            ]);

            return redirect()->route('dashboard', ['username' => $request->Username]);
        }

        return back()->withErrors([
            'Username' => 'Username atau password salah',
        ])->onlyInput('Username');
    }

    public function dashboard(Request $request)
    {
        $username = $request->query('username') ?? session('user_Username');
        return view('dashboard', compact('username'));
    }

    public function logout()
    {
        return view('welcome');
    }

    public function profile(Request $request)
    {
        $username = $request->query('username') ?? session('user_Username');
        return view('profile', compact('username'));
    }

    public function pengelolaan()
    {
    $produk = [
        [
            'id' => 1,
            'nama' => 'Absolutte Yellow',
            'deskripsi' => 'Warna cerah dan hangat cocok untuk ruang keluarga.',
            'warna' => '#FFE600',
            'stok' => '10',
        ],
        [
            'id' => 2,
            'nama' => 'Bubblegum',
            'deskripsi' => 'Memberikan kesan tenang dan damai, cocok untuk kamar tidur.',
            'warna' => '#FF7F7F',
            'stok' => '10',
        ],
        [
            'id' => 3,
            'nama' => 'Ultra Green',
            'deskripsi' => 'Nuansa alami yang cocok untuk ruang santai dan taman.',
            'warna' => '#19953A',
            'stok' => '10',
        ],
        [
            'id' => 4,
            'nama' => 'Deepsea',
            'deskripsi' => 'Pilihan serbaguna yang cocok untuk semua ruangan.',
            'warna' => '#054C73',
            'stok' => '10',
        ],

    ];

    return view('pengelolaan', compact('produk'));
    }
}
