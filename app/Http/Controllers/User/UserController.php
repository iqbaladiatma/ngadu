<?php

namespace App\Http\Controllers\User;

use App\Models\Masyarakat;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('user.landing');
    }
    public function login(Request $request)
    {
        $username = Masyarakat::where('username', $request->username)->first();

        if ($username) {
            return redirect()->back()->with(['pesan' => 'Username tidak ditemukan']);
        }

        $password = Hash::check($request->password, $username->username);
    }
    public function formRegister()
    {
        return view('user.register');
    }
    //
}
