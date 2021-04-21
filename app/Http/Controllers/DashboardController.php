<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Import Db yg login
use Auth;

// Import DB About
use App\Models\About;

// Import DB User
use App\Models\User;

// Impot DB Message
use App\Models\Message;

class DashboardController extends Controller
{
    // ======================================DASHBOARD
    public function dashboard()
    {
        $user   = Auth::user();
        return view('dashboard.dashboard', compact('user'));
    }

    // ======================================ABOUT
    public function about()
    {
        $abouts = About::get();
        return view('dashboard.about', compact('abouts'));
    }

    public function aboutCreate()
    {
        return view('dashboardCreate.create_about');
    }

    public function aboutStore(Request $request)
    {
        $request->validate([
            'about' => ['required', 'min:3']
        ]);

        if(count(About::all()) >= 1 ){
            return redirect('/about')->with('msg', 'Data Sudah Ada !');
        }

        $about = $request->user()->about()->create([
            'about' => $request->about
        ]);

        return redirect('/about')->with('msg', 'Data Succesfully Add !');
    }

    public function aboutEdit($id)
    {
        $about = About::findOrFail($id);

        return view('dashboardEdit.edit_about', compact('about'));
    }

    public function aboutUpdate(Request $request, $id)
    {
        $request->validate([
            'about' => ['required', 'min:3']
        ]);

        $about = About::findOrFail($id)->update([
            'about' => $request->about
        ]);

        return redirect('/about')->with('msg', 'Data Succesfully Change !');

    }

    public function aboutDestroy($id)
    {

        $about = About::destroy($id);

        return redirect('/about');

    }






    // ======================================MESSAGE
    public function message()
    {
        $messages = Message::orderBy('id', 'DESC')->get();

        return view('dashboard.message', compact('messages'));
    }

    public function messageDestroy($id)
    {
        $messages = Message::destroy($id);

        return redirect('/message');
    }
}
