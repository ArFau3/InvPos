<?php

namespace App\Http\Controllers\Inv;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            "title" => "Dashboard",
            // 'user' => $request->user(),
            'user' => [
                'name' => "Nama Lengkap",
            ],
            'daily' => 140000,
            'weekly' => 400000,
            'quarterly' => 70000000,
            'best' => "Aqua Gelas",
            'delivering' => 24,
            'low' => 44,
            'judul' => 'Dashboard',
        ];
        
        return view('inv.dashboard', $data);
    }
}
