<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('profil');
    }
    public function profil()
    {
        $logger = auth()->user()->id;

        $usernya = \App\User::where('id', '=', $logger)->get();
        return view('/profil', ['usernya' => $usernya]);
    }
    public function updateProfil(Request $req)
    {
        $logger = auth()->user()->id;
        \App\User::where('id', '=', $logger)
            ->update([
                'name' => $req->name,
                'email' => $req->email
            ]);
        return redirect()->back();
    }
}