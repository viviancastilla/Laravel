<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class HelloController extends Controller
{

    public function sayhello($name = "Student")
    {
        $studentName = $name;
        $message = "You're going to like building project with laravel";
        return view('greeting', [
            'studentName' => $studentName,
            'message' => $message,
        ]);
    }
}
