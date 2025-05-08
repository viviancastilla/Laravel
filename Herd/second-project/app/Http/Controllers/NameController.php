<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class NameController extends Controller
{
    public function index()
    {
        return view('name');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'color' => 'required|string|max:255',
        ]);

        $name = $request->query('name');
        $color = $request->query('color');

        return view('name', [
            'name' => $name,
            'color' => $color,
        ]);
    }
}
