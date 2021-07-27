<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EvenementController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function create(){

        return view('creation-evenement');

    }

    public function add(){
        $data = request()->validate([
            'nom' =>'required',
            'photo' => ['required', 'image'],
            'date' =>'required',
            'heure' =>'required',
            'description' =>'',
        ]);

        request()->file('photo')->move(
            public_path('storage/imgs'),
            request()->file('photo')->getClientOriginalName()
        );

        // $photo = request()->photo;

        // dd(request()->hasFile('photo'));
        // dd($photo);

        \App\Models\Evenement::create([
            'nom' => $data['nom'],
            'photo' => $data['photo']->getClientOriginalName(),
            'date' => $data['date'],
            'heure' => $data['heure'],
            'description' => $data['description'],
        ]);

        return redirect('/dashboard');

    }

}
