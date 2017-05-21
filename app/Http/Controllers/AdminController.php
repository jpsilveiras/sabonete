<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //return view('pages.home')->withTitle('Painel de Controle = ZigWeb');
        return view('pages.home');
    }

    public function home()
    {

        return view('home');
    }

    public function logout()
    {
        redirect;
    }


}
