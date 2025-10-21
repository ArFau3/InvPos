<?php

use Illuminate\Support\Facades\Route;

// TEMPLATE
Route::get('/', function () {
    return view('dashboard.index');
});

Route::get('/pos', function () {
    $data = [
        'role_user' => "1",
        'active' => "logistik",
        "truks" => [
            [
                "id" => 1,
                "nama" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit",
                "tanggal" => "12 Jan 25",
            ],
            [
                "id" => 2,
                "nama" => "In porttitor turpis eu dignissim ultricies. Maecenas tempus mattis magna non dapibus. 2 consectetur adipiscing elit",
                "tanggal" => "12 Mar 25",
            ],
            [
                "id" => 3,
                "nama" => "sit amet, consectetur adipiscing elit. In porttitor turpis eu dignissim ultricies",
                "tanggal" => "2 Jun 25",
            ],
            [
                "id" => 4,
                "nama" => "snsectetur adipiscing elit. In porttitor turpis eu dignissim ultricies",
                "tanggal" => "2 Jun 25",
            ],
            [
                "id" => 5,
                "nama" => "sir adipiscing elit. In porttitor turpis eu dignissim ultricies",
                "tanggal" => "25 Jun 25",
            ],
            [
                "id" => 6,
                "nama" => "sitcies",
                "tanggal" => "13 Jul 25",
            ],
            [
                "id" => 7,
                "nama" => "siiscing elit. In porttitor turpis eu dignissim ultricies",
                "tanggal" => "20 Des 25",
            ],
        ],
        'logistik' => [
            'sopir' => "Herman",
            'plat' => "KB 6666 ST",
            'kebun' => "Kebun Pak Tedrik",
            'pabrik' => "Pabrik ABC",
            'brutto' => 5000,
            'netto' => 250,
            'harga' => 3300,
        ],
    ];
    return view('pos.index', $data);
});

Route::get('/inventori', function () {
    return view('user.index');
});

Route::get('/online', function () {
    return view('online');
});

Route::get('/bisnis', function () {
    $data = [
        'role_user' => "1",
        'active' => "dashboard",
        'lap_masuk' => 20,
        "cpo" => 20,
        "harga" => 10000,
        "artikels" => [
            [
                "img" => "https://picsum.photos/200",
                "link" => "/artikel/1",
                "title" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit",
                "tanggal" => "12 Jan 25",
            ],
            [
                "img" => "https://picsum.photos/200",
                "link" => "/artikel/2",
                "title" => "In porttitor turpis eu dignissim ultricies. Maecenas tempus mattis magna non dapibus. 2 consectetur adipiscing elit",
                "tanggal" => "12 Mar 25",
            ],
            [
                "img" => "https://picsum.photos/200",
                "link" => "/artikel/3",
                "title" => "sit amet, consectetur adipiscing elit. In porttitor turpis eu dignissim ultricies",
                "tanggal" => "2 Jun 25",
            ],
        ],
    ];
    return view('bisnis', $data);
});

Route::get('/landing', function () {
    $data = [
        'role_user' => "1",
        'active' => "logistik",
        "truks" => [
            [
                "id" => 1,
                "nama" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit",
                "tanggal" => "12 Jan 25",
            ],
            [
                "id" => 2,
                "nama" => "In porttitor turpis eu dignissim ultricies. Maecenas tempus mattis magna non dapibus. 2 consectetur adipiscing elit",
                "tanggal" => "12 Mar 25",
            ],
            [
                "id" => 3,
                "nama" => "sit amet, consectetur adipiscing elit. In porttitor turpis eu dignissim ultricies",
                "tanggal" => "2 Jun 25",
            ],
            [
                "id" => 4,
                "nama" => "snsectetur adipiscing elit. In porttitor turpis eu dignissim ultricies",
                "tanggal" => "2 Jun 25",
            ],
            [
                "id" => 5,
                "nama" => "sir adipiscing elit. In porttitor turpis eu dignissim ultricies",
                "tanggal" => "25 Jun 25",
            ],
            [
                "id" => 6,
                "nama" => "sitcies",
                "tanggal" => "13 Jul 25",
            ],
            [
                "id" => 7,
                "nama" => "siiscing elit. In porttitor turpis eu dignissim ultricies",
                "tanggal" => "20 Des 25",
            ],
        ],
        'logistik' => [
            'sopir' => "Herman",
            'plat' => "KB 6666 ST",
            'kebun' => "Kebun Pak Tedrik",
            'pabrik' => "Pabrik ABC",
            'brutto' => 5000,
            'netto' => 250,
            'harga' => 3300,
        ],
    ];
    return view('landing', $data);
});
// END TEMPLATE
