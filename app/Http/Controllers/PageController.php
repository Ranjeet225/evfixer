<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home() { return view('pages.home'); }
    public function services() { return view('pages.services'); }
    public function about() { return view('pages.about'); }
    public function contact() { return view('pages.contact'); }
    public function book() { return view('pages.book'); }
    public function products() { return view('pages.products'); }
    public function gallery() { return view('pages.gallery'); }
}
