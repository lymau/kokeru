<?php

namespace App\Http\Controllers\CS;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        Carbon::setLocale('id');
        $time = Carbon::now()->formatLocalized("%A, %d %B %Y");

        return view('cs.dashboard', [
            'time' => $time,
        ]);
    }
}
