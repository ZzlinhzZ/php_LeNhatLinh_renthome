<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public static function showInfo() {
        $attributes = DB::table('hotel_info')->get();
        // dd($attributes);
        return view('index', compact('attributes'));
    }

    public static function search(Request $request) {
        dd($request);
        return view('index');
    }
}
