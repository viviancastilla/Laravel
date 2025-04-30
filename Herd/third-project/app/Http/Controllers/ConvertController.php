<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConvertController extends Controller
{
    // Display the conversion form
    public function index()
    {
        return view('converter');
    }
    // Handle the conversion
    public function convert(Request $request)
    {

        $request->validate([
            'value' => 'required|numeric',
            'conversion_type' => 'required|in:celsius_to_fahrenheit,celsius_to_kelvin'
        ]);

        $value = $request->input('value');
        $converstionType = $request->input('conversion_type');

        $result = 0;
        $unitFrom = '';
        $unitTo = '';

        //Temperature conversion
        if ($converstionType === 'celsius_to_fahrenheit') {
            $result = ($value * 9 / 5) + 32;
            $unitFrom = 'Celsius';
            $unitTo = 'Fahrenheit';
        } elseif ($converstionType === 'celsius_to_kelvin') {
            $result =  $value + 273.15;
            $unitFrom = 'Celsius';
            $unitTo = 'Kelvin';
        }
        $result = round($result, 2);

        return view('converter', [
            'value' => $value,
            'converstionType' => $converstionType,
            'result' => $result,
            'unitFrom' => $unitFrom,
            'unitTo' => $unitTo,
        ]);
    }
}
