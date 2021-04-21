<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Import Db About
use App\Models\About;

// Import Db Message
use App\Models\Message;

class PortofolioController extends Controller
{

    public function portofolio()
    {
        $about = About::first();
        return view('portofolio.portofolio', compact('about'));
    }

    public function message(Request $request)
    {
        $request->validate([
            'name'  => ['required', 'min:3', 'max:25', 'string'],
            'email' => ['required', 'min:3', 'max:25', 'email'],
            'msg'   => ['required', 'min:3']
        ]);

        $message = Message::create([
            'name'    => $request->name,
            'email'   => $request->email,
            'message' => $request->msg
        ]);

        return redirect('/portofolio')->with('msg', 'Data Succesfully Add !');
    }
}
