<?php

namespace App\Http\Controllers;

class ThemeController extends Controller
{
    function index()
    {
        return view('theme.index');
    }

    function category()
    {
        return view('theme.category');
    }

    function contact()
    {
        return view('theme.contact');
    }

    function singleBlog()
    {
        return view('theme.single-blog');
    }

    function login()
    {
        return view('theme.login');
    }

    function register()
    {
        return view('theme.register');
    }   
}
