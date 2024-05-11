<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function viewHome(){
        return view('home', [
            'title' => "Home"
        ]);
    }

    public function viewRegister(){
        return view('register', [
            'title' => "Register"
        ]);
    }

    public function viewLogin(){
        return view('login', [
            'title' => "Login"
        ]);
    }

    public function viewEvents(){
        return view('events', [
            'title' => "Events"
        ]);
    }

    public function viewRecruitment(){
        return view('recruitment', [
            'title' => "Recruitment"
        ]);
    }

    public function viewStore(){
        return view('store', [
            'title' => "Store"
        ]);
    }

    public function viewRanking(){
        return view('ranking', [
            'title' => "Ranking"
        ]);
    }

    public function viewProfile(){
        return view('profile', [
            'title' => "Profile"
        ]);
    }
}
