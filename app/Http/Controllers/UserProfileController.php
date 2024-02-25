<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function show($id, $name)
    {
        return view('userProfile')
            ->with('id', $id)
            ->with('name', $name);
    }
}
