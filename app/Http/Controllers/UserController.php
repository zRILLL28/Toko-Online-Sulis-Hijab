<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function customer()
    {
        $user = User::where('role', 'customer')->get();
        $data = array(
            'result' => $user
        );
        return view('dashboard.customer.index', $data);
    }

    public function operator()
    {
        $user = User::where('role', 'operator')->get();
        $data = array(
            'result' => $user
        );
        return view('dashboard.operator.index', $data);
    }
}
