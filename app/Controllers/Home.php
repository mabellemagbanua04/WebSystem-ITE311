<?php
namespace App\Controllers;

class Home extends BaseController
{
    protected $helpers = ['url'];

    public function index()
    {
        return view('index');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }
}