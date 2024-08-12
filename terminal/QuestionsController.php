<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionsController extends Controller
{
    public function showQ1()
    {
        return view('q1');
    }

    public function showQ2()
    {
        return view('q2');
    }

    public function showQ3()
    {
        return view('q3');
    }
}
