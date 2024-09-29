<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('index');
    }

    public function about(){
        return view('pages.about');
    }

    public function service(){
        return view('pages.service');
    }

    public function event(){
        return view('pages.event');
    }

    public function gallery(){
        return view('pages.gallery');
    }

    public function blog(){
        return view('pages.blog');
    }

    // Auth Route //
    public function login(){
        return view('auth.login');
    }

    public function register(){
        return view('auth.register');
    }

    // Password Reset Route //
    // public function forgotPassword(){
    //     return view('auth.passwords.forgot');
    // }

    // public function resetPassword($token){
    //     return view('auth.passwords.reset', compact('token'));
    // }


    // Admin Route //
    public function adminDashboard(){
        return view('admin.adminDashboard');
    }


    // Vendor Route //
    public function vendorDashboard(){
        return view('vendor.vendorDashboard');
    }

    // Customer Route //
    public function customerDashboard(){
        return view('customer.customerDashboard');
    }
}

