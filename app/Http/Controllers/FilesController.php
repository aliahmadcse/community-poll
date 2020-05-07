<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilesController extends Controller
{
    public function show()
    {
        $pathToFile = storage_path('app/GraceHopper.pdf');
        $name = 'Amazing Race';

        return response()->download($pathToFile, $name);
    }

    public function create(Request $request)
    {
        $path = $request->file('photo')->store('testing');
        return response()->json(['path' => $path], 200);
    }
}
