<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function dashboard(){
      return view('backend.dashboard.dashboard');
    }
    function datatable(){
      return view('backend.dashboard.datatable');
    }
    function fileupload(){
      return view('backend.dashboard.fileupload');
    }
    function dashboard_login(){
      return view('backend.layouts.login');
    }
    function dashboard_register(){
      return view('backend.layouts.register');
    }

}
