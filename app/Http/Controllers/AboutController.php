<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index() {
        return view('admin.about', [
            'title' => 'About You',
            'name' => 'Bhishma Astain Kaffa',
            'link' => 'https://github.com/bhishmaastainkaffa-cmyk']);
    }
    //
}
