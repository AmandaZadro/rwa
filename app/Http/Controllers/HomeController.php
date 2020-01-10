<?php

namespace App\Http\Controllers;

use App\BridalSalon;
use App\MusicGroup;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function getAllSalons()
    {
        $salons = BridalSalon::all();

        return view('salons', compact('salons'));
    }

    public function getAllMusicGroups()
    {

        $groups = MusicGroup::all();

        return view('music-groups', compact('groups'));
    }
}
