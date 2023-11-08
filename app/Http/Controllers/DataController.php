<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\User;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function index()
    {
        $data = User::with('phone')->get();

        return view('index', compact('data'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $user = User::create($request->all());
        $user->save();

        $phone = Phone::create([
            'user_id' => $user->id,
            'phone_type' => $request->phone_type,
            'phone_number' => $request->number
        ]);
        $phone->save();
        return redirect('/all')->with('message', 'User was added');
    }
}
