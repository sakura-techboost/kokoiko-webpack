<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class ContentsController extends Controller
{
    public function content() {
        return view('contents.content');
    }
    
}
