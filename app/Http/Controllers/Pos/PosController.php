<?php

namespace App\Http\Controllers\Pos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PosController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            "title" => "pos",
            // 'user' => $request->user(),
            'user' => [
                'name' => "Nama Lengkap",
            ],
            'judul' => 'POS',
        ];
        
        return view('pos.index', $data);
    }
}
