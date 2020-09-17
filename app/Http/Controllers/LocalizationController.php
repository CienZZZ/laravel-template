<?php

namespace App\Http\Controllers;


class LocalizationController extends Controller
{
    public function index($locale)
    {
        app()->setlocale($locale);
        //store the locale in session so that the middleware can register it
        session()->put('locale', $locale);
        return redirect()->back();
    }
}
