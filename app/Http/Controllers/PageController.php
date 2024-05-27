<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    // Account Related

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

    public function viewProfile(){
        return view('/profile/profile', [
            'title' => "Profile"
        ]);
    }

    public function viewRanking(){
        return view('/profile/ranking', [
            'title' => "Ranking"
        ]);
    }

    // Pages

    public function viewHome(){
        return view('home', [
            'title' => "Home"
        ]);
    }

    // Events    

    public function viewEvents(){
        return view('/events/events', [
            'title' => "Events"
        ]);
    }

    public function viewNewEvents(){
        return view('/events/new-event', [
            'title' => "New Event"
        ]);
    }

    public function viewEventDashboard(){
        return view('/events/event-dashboard', [
            'title' => "Event Dashboard"
        ]);
    }

    public function viewEventDetail(){
        return view('events/event-detail', [
            'title' => "Event Detail"
        ]);
    }

    public function viewChat(){
        return view('/events/partials/chat', [
            'title' => "Chat"
        ]);
    }

    // Recruitment

    public function viewRecruitment(){
        return view('/recruitment/recruitment', [
            'title' => "Recruitment"
        ]);
    }

    public function viewRecruitmentDetail(){
        return view('/recruitment/recruitment-detail', [
            'title' => "Recruitment Detail"
        ]);
    }

    // Store

    public function viewStore(){
        return view('/store/store', [
            'title' => "Store"
        ]);
    }

    // Training

    public function viewTraining(){
        return view('/training/training', [
            'title' => "Training"
        ]);
    }

    public function viewTrainingDetail(){
        return view('/training/training-detail', [
            'title' => "Training Detail"
        ]);
    }
}
