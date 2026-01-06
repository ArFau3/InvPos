<?php

namespace App\Http\Controllers\Inv;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            "title" => "stock",
            // 'user' => $request->user(),
            'user' => [
                'name' => "Nama Lengkap",
            ],
            'judul' => 'Stock',
        ];
        
        return view('inv.stock.index', $data);
    }
}
