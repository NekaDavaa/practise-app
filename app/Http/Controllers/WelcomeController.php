<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class WelcomeController extends Controller
{
    public function index()
    {
        $users = User::query()
        ->select('id', 'name', 'created_at')
        ->get();
        return view('welcome', ['users' => $users]);
    }
}
