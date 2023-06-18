<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard.index');
    }
    
    public function articles(){
        return view('dashboard.articles');
    }
    
    public function publishArticle(){
        return view('dashboard.publish-article');
    }
    
    public function EventsLog(){
        return view('dashboard.events.index');
    }
    
    public function Firewall(){
        return view('dashboard.firewall.index');
    }
    
    public function Users(){
        return view('dashboard.users.index');
    }
    
    public function AddUser(){
        return view('dashboard.users.add-user');
    }

    public function Areas(){
        return view('dashboard.areas.index');
    }
    
    public function AddArea(){
        return view('dashboard.areas.add-area');
    }
}
