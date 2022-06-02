<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\create;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $forms = create::all();

        return view('home', [
            'forms' => $forms
        ]);
    }

    public function create()
    {
        return view('create');
    }

    public function store()
    {
        $form = new create();

        $form->name = request('name');
        $form->complaint = request('complaint');
        $form->date = request('date');

        $form->save();

        return redirect('/home');
    }
}
