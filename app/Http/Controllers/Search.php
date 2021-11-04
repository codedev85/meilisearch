<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class Search extends Controller
{
    public function search(Request $request)
    {
        $data = request()->validate(['search' => 'required']);
        $result = User::search($data['search'])->raw();

        return view('welcome', compact('result'));
    }
}
