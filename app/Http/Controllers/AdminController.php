<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Dealer;
use App\Models\Contact;

class AdminController extends Controller
{
    public function dashboard()
    {
        $stats = [
            'totalUsers' => User::count(),
            'totalDealers' => Dealer::count(),
            'totalContacts' => Contact::count(),
        ];

        return view('admin.dashboard', $stats);
    }


    public function dealers()
    {
        return view('admin.dealers');
    }
}
