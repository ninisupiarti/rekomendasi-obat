<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocalizationController extends Controller
{
    public function setLanguage(Request $request)
    {
        app()->setLocale($request->language);
        Session::put("locale", $request->language);

        return back();
    }
}
