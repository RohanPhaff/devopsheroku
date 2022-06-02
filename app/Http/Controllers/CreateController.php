<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\create;

class CreateController extends Controller
{
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
