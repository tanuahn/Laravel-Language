<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PostController extends Controller
{
    public function changeLanguage($language)
    {
        Session::put('language', $language);
        return redirect()->back();
    }
}
