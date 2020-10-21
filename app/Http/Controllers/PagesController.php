<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function home(){
        return view('index', ['nama' => 'Bridal Mantap ABis']);
    }
    public function gaun(){
        return view('gaun');
    }
    public function makeup(){
        return view('makeup');
    }
}
