<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Nanti kamu bisa tambah/ubah list ini sesuka hati
        $products = [
            [
                'id' => 1,
                'name' => 'Netflix',
                'category' => 'Streaming',
                'is_double' => true,
                'input_label' => 'Nama',
                'input_label2' => 'Nomor Telepon',
                'image' => asset('asset/img/products/netflix.png'),
                'variants' => [
                    ['name' => '1p1u 1 Bulan', 'price' => 'Rp 32.000'],
                    ['name' => '1p2u 1 Bulan', 'price' => 'Rp 17.000'],
                    ['name' => 'Semi Private 1 Bulan', 'price' => 'Rp 37.000'],
                    ['name' => 'Private 1 Bulan', 'price' => 'Rp 150.000'],
                ]
            ],
            [
                'id' => 2,
                'name' => 'WeTv Vip',
                'category' => 'Streaming',
                'is_double' => true,
                'input_label' => 'Nama',
                'input_label2' => 'Nomor Telepon',
                'image' => asset('asset/img/products/wetv.jpg'),
                'variants' => [
                    ['name' => 'Sharing 1 Bulan', 'price' => 'Rp 5.000'],
                    ['name' => 'Private 1 Bulan', 'price' => 'Rp 20.000'],
                ]
            ],
            [
                'id' => 3,
                'name' => 'V Merah Platinum',
                'category' => 'Streaming',
                'is_double' => true,
                'input_label' => 'Nama',
                'input_label2' => 'Nomor Telepon',
                'image' => asset('asset/img/products/v.png'),
                'variants' => [
                    ['name' => 'Sharing 1 Bulan', 'price' => 'Rp 20.000'],
                    ['name' => 'Private 1 Bulan', 'price' => 'Rp 35.000'],
                ]
            ],
            [
                'id' => 4,
                'name' => 'Roblox Instant',
                'category' => 'Top Up Game',
                'is_double' => true,
                'input_label' => 'Username',
                'input_label2' => 'ID Game Pass',
                'image' => asset('asset/img/products/roblox.png'),
                'variants' => [
                    ['name' => '100 Robux', 'price' => 'Rp 10.500'],
                    ['name' => '200 Robux', 'price' => 'Rp 21.000'],
                    ['name' => '300 Robux', 'price' => 'Rp 31.000'],
                    ['name' => '400 Robux', 'price' => 'Rp 42.000'],
                    ['name' => '500 Robux', 'price' => 'Rp 52.500'],
                    ['name' => '600 Robux', 'price' => 'Rp 62.000'],
                    ['name' => '700 Robux', 'price' => 'Rp 73.500'],
                    ['name' => '800 Robux', 'price' => 'Rp 84.000'],
                    ['name' => '900 Robux', 'price' => 'Rp 94.500'],
                    ['name' => '1000 Robux', 'price' => 'Rp 105.000'],
                ]
            ],
            [
                'id' => 5,
                'name' => 'Roblox Slow 7 Hari',
                'category' => 'Top Up Game',
                'is_double' => true,
                'input_label' => 'Username',
                'input_label2' => 'Password',
                'image' => asset('asset/img/products/roblox.png'),
                'variants' => [
                    ['name' => '80 Robux', 'price' => 'Rp 15.000'],
                    ['name' => '160 Robux', 'price' => 'Rp 30.000'],
                    ['name' => '240 Robux', 'price' => 'Rp 45.000'],
                    ['name' => '320 Robux', 'price' => 'Rp 60.000'],
                    ['name' => '500 Robux', 'price' => 'Rp 72.000'],
                    ['name' => '1.000 Robux', 'price' => 'Rp 144.000'],
                    ['name' => '1.500 Robux', 'price' => 'Rp 216.000'],
                    ['name' => '2.000 Robux', 'price' => 'Rp 288.000'],
                    ['name' => '2.500 Robux', 'price' => 'Rp 360.000'],
                    ['name' => '3.000 Robux', 'price' => 'Rp 432.000'],
                    ['name' => '3.500 Robux', 'price' => 'Rp 504.000'],
                    ['name' => '4.000 Robux', 'price' => 'Rp 576.000'],
                    ['name' => '4.500 Robux', 'price' => 'Rp 648.000'],
                    ['name' => '5.000 Robux', 'price' => 'Rp 720.000'],
                    ['name' => '450 Robux Premium', 'price' => 'Rp 72.000'],
                    ['name' => '1.000 Robux Premium', 'price' => 'Rp 144.000'],
                    ['name' => '2.200 Robux Premium', 'price' => 'Rp 288.000'],
                    ['name' => '10.000 Robux (Sultan)', 'price' => 'Rp 1.440.000'],
                    ['name' => '20.000 Robux (Sultan)', 'price' => 'Rp 2.880.000'],
                    ['name' => '30.000 Robux (Sultan)', 'price' => 'Rp 4.320.000'],
                ]
            ],
            [
                'id' => 6,
                'name' => 'Viu Premium',
                'category' => 'Streaming',
                'is_double' => true,
                'input_label' => 'Nama',
                'input_label2' => 'Nomor Telepon',
                'image' => asset('asset/img/products/viu.png'),
                'variants' => [
                    ['name' => 'Private 1 Tahun', 'price' => 'Rp 3.000'],
                    ['name' => 'Private Lifetime', 'price' => 'Rp 6.000'],
                ]
            ],
            [
                'id' => 7,
                'name' => 'Prime Video',
                'category' => 'Streaming',
                'is_double' => true,
                'input_label' => 'Nama',
                'input_label2' => 'Nomor Telepon',
                'image' => asset('asset/img/products/prime.png'),
                'variants' => [
                    ['name' => 'Sharing 1 Bulan', 'price' => 'Rp 3.000'],
                    ['name' => 'Private 1 Bulan', 'price' => 'Rp 7.000'],
                    ['name' => 'Private 6 Bulan', 'price' => 'Rp 15.000'],
                ]
            ],
            [
                'id' => 8,
                'name' => 'Youtube Premium',
                'category' => 'Streaming',
                'is_double' => true,
                'input_label' => 'Nama',
                'input_label2' => 'Nomor Telepon',
                'image' => asset('asset/img/products/youtube2.png'),
                'variants' => [
                    ['name' => 'Family 1 Bulan', 'price' => 'Rp 3.000'],
                    ['name' => 'Individual 1 Bulan', 'price' => 'Rp 10.000'],
                    ['name' => 'Individual 3 Bulan', 'price' => 'Rp 30.000'],
                    ['name' => 'Mix 3 Bulan', 'price' => 'Rp 15.000'],

                ]
            ],
            [
                'id' => 9,
                'name' => 'Iqiyi',
                'category' => 'Streaming',
                'is_double' => true,
                'input_label' => 'Nama',
                'input_label2' => 'Nomor Telepon',
                'image' => asset('asset/img/products/iqiyi.jpg'),
                'variants' => [
                    ['name' => 'Sharing 1 Bulan', 'price' => 'Rp 3.000'],
                    ['name' => 'Private 1 Bulan', 'price' => 'Rp 23.000'],

                ]
            ],
            [
                'id' => 10,
                'name' => 'Bstation',
                'category' => 'Streaming',
                'is_double' => true,
                'input_label' => 'Nama',
                'input_label2' => 'Nomor Telepon',
                'image' => asset('asset/img/products/bstation.png'),
                'variants' => [
                    ['name' => 'Sharing 1 Bulan', 'price' => 'Rp 5.000'],
                    ['name' => 'Private 1 Bulan', 'price' => 'Rp 30.000'],

                ]
            ],
            [
                'id' => 11,
                'name' => 'HBO Max',
                'category' => 'Streaming',
                'is_double' => true,
                'input_label' => 'Nama',
                'input_label2' => 'Nomor Telepon',
                'image' => asset('asset/img/products/hbomax.png'),
                'variants' => [
                    ['name' => 'Sharing 1 Bulan', 'price' => 'Rp 5.000'],
                    ['name' => 'Private 1 Bulan', 'price' => 'Rp 30.000'],
                ]
            ],
            [
                'id' => 12,
                'name' => 'Spotify',
                'category' => 'Streaming',
                'is_double' => true,
                'input_label' => 'Nama',
                'input_label2' => 'Nomor Telepon',
                'image' => asset('asset/img/products/spotify.jpg'),
                'variants' => [
                    ['name' => 'Individual 1 Bulan', 'price' => 'Rp 18.000'],
                    ['name' => 'Individual 3 Bulan', 'price' => 'Rp 35.000'],
                ]
            ],
            [
                'id' => 13,
                'name' => 'Apple Music',
                'category' => 'Streaming',
                'is_double' => true,
                'input_label' => 'Nama',
                'input_label2' => 'Nomor Telepon',
                'image' => asset('asset/img/products/apple.png'),
                'variants' => [
                    ['name' => 'Imess 1 Bulan', 'price' => 'Rp 3.000'],
                    ['name' => 'Individual 1 Bulan', 'price' => 'Rp 10.000'],
                ]
            ],
            [
                'id' => 14,
                'name' => 'Canva Pro',
                'category' => 'Editor Apps',
                'is_double' => true,
                'input_label' => 'Nama',
                'input_label2' => 'Nomor Telepon',
                'image' => asset('asset/img/products/canva.png'),
                'variants' => [
                    ['name' => 'Pro 1 Bulan', 'price' => 'Rp 1.000'],
                    ['name' => 'Pro 2 Bulan', 'price' => 'Rp 2.000'],
                    ['name' => 'Pro 3 Bulan', 'price' => 'Rp 3.000'],
                    ['name' => 'Pro 6 Bulan', 'price' => 'Rp 6.000'],
                    ['name' => 'Pro 12 Bulan', 'price' => 'Rp 12.000'],
                ]
            ],
            [
                'id' => 15,
                'name' => 'Alight Motion',
                'category' => 'Editor Apps',
                'is_double' => true,
                'input_label' => 'Nama',
                'input_label2' => 'Nomor Telepon',
                'image' => asset('asset/img/products/alightmotion.png'),
                'variants' => [
                    ['name' => 'Private 1 Tahun', 'price' => 'Rp 3.000'],
                ]
            ],
            [
                'id' => 16,
                'name' => 'CapCut Pro',
                'category' => 'Editor Apps',
                'is_double' => true,
                'input_label' => 'Nama',
                'input_label2' => 'Nomor Telepon',
                'image' => asset('asset/img/products/capcut.png'),
                'variants' => [
                    ['name' => 'Private 7 Hari', 'price' => 'Rp 2.000'],
                    ['name' => 'Private 1 Bulan', 'price' => 'Rp 5.000'],
                ]
            ],
            [
                'id' => 17,
                'name' => 'Wink Vip', 
                'category' => 'Editor Apps',
                'is_double' => true,
                'input_label' => 'Nama',
                'input_label2' => 'Nomor Telepon',
                'image' => asset('asset/img/products/wink.png'),
                'variants' => [
                    ['name' => 'Android 7 Hari', 'price' => 'Rp 5.000'],
                ]
            ],
            [
                'id' => 18,
                'name' => 'Meitu Vip', 
                'category' => 'Editor Apps',
                'is_double' => true,
                'input_label' => 'Nama',
                'input_label2' => 'Nomor Telepon',
                'image' => asset('asset/img/products/meitu.png'),
                'variants' => [
                    ['name' => 'Android 7 Hari', 'price' => 'Rp 5.000'],
                    ['name' => 'Android 1 Bulan', 'price' => 'Rp 20.000'],
                ]
            ],
            [
                'id' => 19,
                'name' => 'Remini Web', 
                'category' => 'Editor Apps',
                'is_double' => true,
                'input_label' => 'Nama',
                'input_label2' => 'Nomor Telepon',
                'image' => asset('asset/img/products/Remini.png'),
                'variants' => [
                    ['name' => 'Sharing 7 Hari', 'price' => 'Rp 5.000'],
                ]
            ],
            [
                'id' => 20,
                'name' => 'Chatgpt Plus', 
                'category' => 'AI',
                'is_double' => true,
                'input_label' => 'Nama',
                'input_label2' => 'Nomor Telepon',
                'image' => asset('asset/img/products/chatgpt.jpg'),
                'variants' => [
                    ['name' => 'Sharing 1 Bulan', 'price' => 'Rp 7.000'],
                    ['name' => 'Private 1 Bulan', 'price' => 'Rp 30.000'],
                ]
            ],
            [
                'id' => 21,
                'name' => 'Gemini Pro', 
                'category' => 'AI',
                'is_double' => true,
                'input_label' => 'Nama',
                'input_label2' => 'Nomor Telepon',
                'image' => asset('asset/img/products/gemini.png'),
                'variants' => [
                    ['name' => 'Family 1 Bulan', 'price' => 'Rp 5.000'],
                    ['name' => 'Family 3 Bulan', 'price' => 'Rp 8.000'],
                    ['name' => 'Private 1 Bulan', 'price' => 'Rp 20.000'],
                    ['name' => 'Private 3 Bulan', 'price' => 'Rp 25.000'],
                ]
            ],
            [
                'id' => 22,
                'name' => 'Zoom Pro', 
                'category' => 'Streaming',
                'is_double' => true,
                'input_label' => 'Nama',
                'input_label2' => 'Nomor Telepon',
                'image' => asset('asset/img/products/zoom2.png'),
                'variants' => [
                    ['name' => 'Pro 7 Hari', 'price' => 'Rp 4.000'],
                    ['name' => 'Pro 14 Hari', 'price' => 'Rp 7.000'],
                    ['name' => 'Pro 1 Bulan', 'price' => 'Rp 14.000'],
                ]
            ],
            [
                'id' => 23, 
                'name' => 'Mobile Legends Region Indonesia',
                'category' => 'Top Up Game',
                'is_double' => true,
                'input_label' => 'User ID',
                'input_label2' => 'Zone ID',
                'image' => asset('asset/img/products/ml-ind.png'),
                'variants' => [
                    ['name' => '5 Diamonds', 'price' => 'Rp 1.500'],
                    ['name' => '10 Diamonds (9 + 1 Bonus)', 'price' => 'Rp 3.000'],
                    ['name' => '12 Diamonds (11 + 1 Bonus)', 'price' => 'Rp 3.500'],
                    ['name' => '14 Diamonds (13 + 1 Bonus)', 'price' => 'Rp 4.000'],
                    ['name' => '18 Diamonds (17 + 1 Bonus)', 'price' => 'Rp 5.100'],
                    ['name' => '28 Diamonds (25 + 3 Bonus)', 'price' => 'Rp 8.200'],
                    ['name' => '36 Diamonds (33 + 3 Bonus)', 'price' => 'Rp 10.300'],
                    ['name' => '44 Diamonds (40 + 4 Bonus)', 'price' => 'Rp 12.300'],
                    ['name' => '54 Diamonds (50 + 4 Bonus)', 'price' => 'Rp 15.500'],
                    ['name' => '71 Diamonds (64 + 7 Bonus)', 'price' => 'Rp 19.500'],
                    ['name' => '74 Diamonds (67 + 7 Bonus)', 'price' => 'Rp 20.500'],
                    ['name' => '85 Diamonds (77 + 8 Bonus)', 'price' => 'Rp 23.000'],
                    ['name' => '110 Diamonds (100 + 10 Bonus)', 'price' => 'Rp 31.000'],
                    ['name' => '148 Diamonds (134 + 14 Bonus)', 'price' => 'Rp 41.000'],
                    ['name' => '184 Diamonds (167 + 17 Bonus)', 'price' => 'Rp 51.500'],
                    ['name' => '222 Diamonds (200 + 22 Bonus)', 'price' => 'Rp 62.000'],
                    ['name' => '277 Diamonds (250 + 27 Bonus)', 'price' => 'Rp 77.000'],
                    ['name' => '370 Diamonds (333 + 37 Bonus)', 'price' => 'Rp 103.000'],
                    ['name' => '408 Diamonds (367 + 41 Bonus)', 'price' => 'Rp 112.000'],
                    ['name' => '568 Diamonds (503 + 65 Bonus)', 'price' => 'Rp 153.000'],
                    ['name' => '790 Diamonds (703 + 87 Bonus)', 'price' => 'Rp 215.000'],
                    ['name' => '966 Diamonds (836 + 130 Bonus)', 'price' => 'Rp 265.000'],
                    ['name' => '1704 Diamonds (1509 + 195 Bonus)', 'price' => 'Rp 460.000'],
                    ['name' => '2010 Diamonds (1708 + 302 Bonus)', 'price' => 'Rp 510.000'],
                    ['name' => '2380 Diamonds (2041 + 339 Bonus)', 'price' => 'Rp 615.000'],
                    ['name' => '4020 Diamonds (3416 + 604 Bonus)', 'price' => 'Rp 1.015.000'],
                    ['name' => '6840 Diamonds (5711 + 1129 Bonus)', 'price' => 'Rp 1.730.000'],
                    ['name' => '14490 Diamonds (12009 + 2481 Bonus)', 'price' => 'Rp 3.675.000'],
                    //WeeklyPass
                    ['name' => 'Weekly Pass', 'price' => 'Rp 27.500'],
                ]
            ],
            [
                'id' => 24,
                'name' => 'PUBG Mobile',
                'category' => 'Top Up Game',
                'is_double' => false,
                'input_label' => 'Player ID',
                'input_label2' => null,
                'image' => asset('asset/img/products/pubg.jpg'),
                'variants' => [
                    ['name' => '60 UC', 'price' => 'Rp 15.500'],
                    ['name' => '120 UC', 'price' => 'Rp 31.000'],
                    ['name' => '180 UC', 'price' => 'Rp 46.500'],
                    ['name' => '240 UC', 'price' => 'Rp 62.500'],
                    ['name' => '300 + 25 Bonus UC', 'price' => 'Rp 77.500'],
                    ['name' => '360 + 25 Bonus UC', 'price' => 'Rp 93.000'],
                    ['name' => '420 + 25 Bonus UC', 'price' => 'Rp 108.500'],
                    ['name' => '480 + 25 Bonus UC', 'price' => 'Rp 125.000'],
                    ['name' => '540 + 25 Bonus UC', 'price' => 'Rp 140.000'],
                    ['name' => '600 + 60 Bonus UC', 'price' => 'Rp 155.000'],
                    ['name' => '660 + 60 Bonus UC', 'price' => 'Rp 172.500'],
                    ['name' => '720 + 60 Bonus UC', 'price' => 'Rp 187.000'],
                    ['name' => '780 + 60 Bonus UC', 'price' => 'Rp 202.500'],
                    ['name' => '840 + 60 Bonus UC', 'price' => 'Rp 217.500'],
                    ['name' => '900 + 85 Bonus UC', 'price' => 'Rp 232.500'],
                    ['name' => '1020 + 85 Bonus UC', 'price' => 'Rp 263.500'],
                    ['name' => '1080 + 85 Bonus UC', 'price' => 'Rp 278.500'],
                    ['name' => '1200 + 120 Bonus UC', 'price' => 'Rp 310.000'],
                    ['name' => '1320 + 120 Bonus UC', 'price' => 'Rp 340.000'],
                    ['name' => '1380 + 120 Bonus UC', 'price' => 'Rp 355.000'],
                    ['name' => '4800 + 1175 Bonus UC', 'price' => 'Rp 1.220.000'],
                    ['name' => '6000 + 2100 Bonus UC', 'price' => 'Rp 1.520.000'],
                    ['name' => '12000 + 4200 Bonus UC', 'price' => 'Rp 3.025.000'],
                    ['name' => '18000 + 6300 Bonus UC', 'price' => 'Rp 4.540.000'],
                    ['name' => '24000 + 8400 Bonus UC', 'price' => 'Rp 6.100.000'],
                    ['name' => '36000 + 12600 Bonus UC', 'price' => 'Rp 9.150.000'],
                    ['name' => '48000 + 16800 Bonus UC', 'price' => 'Rp 12.250.000'],
                ]
            ],
            [
                'id' => 25, 
                'name' => 'Free Fire Indo',
                'category' => 'Top Up Game',
                'is_double' => false,
                'input_label' => 'Player ID',
                'input_label2' => null,
                'image' => asset('asset/img/products/freefire.jpg'),
                'variants' => [
                    // Topup Fast
                    ['name' => '10 Diamonds', 'price' => 'Rp 2.000'],
                    ['name' => '25 Diamonds', 'price' => 'Rp 5.000'],
                    ['name' => '50 Diamonds', 'price' => 'Rp 8.000'],
                    ['name' => '80 Diamonds', 'price' => 'Rp 12.500'],
                    ['name' => '170 Diamonds', 'price' => 'Rp 24.500'],
                    ['name' => '280 Diamonds', 'price' => 'Rp 38.000'],
                    ['name' => '355 Diamonds', 'price' => 'Rp 46.000'],
                    ['name' => '475 Diamonds', 'price' => 'Rp 64.000'],
                    ['name' => '545 Diamonds', 'price' => 'Rp 75.000'],
                    ['name' => '790 Diamonds', 'price' => 'Rp 103.500'],
                    ['name' => '930 Diamonds', 'price' => 'Rp 120.000'],
                    ['name' => '1075 Diamonds', 'price' => 'Rp 140.000'],
                    ['name' => '1450 Diamonds', 'price' => 'Rp 192.000'],
                    ['name' => '2000 Diamonds', 'price' => 'Rp 260.000'],
                    ['name' => '2160 Diamonds', 'price' => 'Rp 280.000'],
                    ['name' => '2180 Diamonds', 'price' => 'Rp 283.000'],
                    
                    // Membership Fast
                    ['name' => 'BP Card', 'price' => 'Rp 42.000'],
                    ['name' => 'Weekly Membership', 'price' => 'Rp 28.000'],
                    ['name' => 'Monthly Membership', 'price' => 'Rp 85.500'],
                ]
            ],
            [
                'id' => 26, 
                'name' => 'Genshin Impact',
                'category' => 'Top Up Game',
                'is_double' => false,
                'input_label' => 'Player ID',
                'input_label2' => 'Server',
                'image' => asset('asset/img/products/genshin.jpg'),
                'variants' => [
                    // Topup Fast
                    ['name' => '60 Genesis Crystal', 'price' => 'Rp 11.100'],
                    ['name' => '330 Genesis Crystal', 'price' => 'Rp 56.500'],
                    ['name' => '1090 Genesis Crystal', 'price' => 'Rp 172.300'],
                    ['name' => '2240 Genesis Crystal', 'price' => 'Rp 363.600'],
                    ['name' => '3880 Genesis Crystal', 'price' => 'Rp 589.300'],
                    
                    // Membership Fast
                    ['name' => 'Blessing of the Welkin Moon', 'price' => 'Rp 56.000'],
                    ['name' => 'Blessing of the Welkin Moon x2', 'price' => 'Rp 112.000'],
                    ['name' => 'Blessing of the Welkin Moon x3', 'price' => 'Rp 168.000'],
                ]
            ],
            [
                'id' => 27, 
                'name' => 'MLBB Region Malaysia',
                'category' => 'Top Up Game',
                'is_double' => true,
                'input_label' => 'User ID',
                'input_label2' => 'Zone ID',
                'image' => asset('asset/img/products/ml-my.png'),
                'variants' => [
                    ['name' => '14 Diamonds', 'price' => 'Rp 5.000'],
                    ['name' => '70 Diamonds', 'price' => 'Rp 21.200'],
                    ['name' => '140 Diamonds', 'price' => 'Rp 43.000'],
                    ['name' => '284 Diamonds', 'price' => 'Rp 84.500'],
                    ['name' => '355 Diamonds', 'price' => 'Rp 103.000'],
                    ['name' => '429 Diamonds', 'price' => 'Rp 128.000'],
                    ['name' => '537 Diamonds', 'price' => 'Rp 160.500'],
                    ['name' => '639 Diamonds', 'price' => 'Rp 190.000'],
                    ['name' => '716 Diamonds', 'price' => 'Rp 208.000'],
                    ['name' => '858 Diamonds', 'price' => 'Rp 253.500'],
                    ['name' => '1145 Diamonds', 'price' => 'Rp 340.000'],
                    ['name' => '1446 Diamonds', 'price' => 'Rp 421.000'],
                    ['name' => '2162 Diamonds', 'price' => 'Rp 632.000'],
                    ['name' => '2976 Diamonds', 'price' => 'Rp 800.000'],
                    ['name' => '3692 Diamonds', 'price' => 'Rp 1.060.000'],
                    ['name' => '6381 Diamonds', 'price' => 'Rp 1.815.000'],
                    ['name' => '7502 Diamonds', 'price' => 'Rp 2.000.000'],
                    //WeeklyPass
                    ['name' => 'Weekly Pass', 'price' => 'Rp 35.500'],
                ]
            ],
            [
                'id' => 28,
                'name' => 'MLBB Region Brazil',
                'category' => 'Top Up Game',
                'is_double' => true,
                'input_label' => 'User ID',
                'input_label2' => 'Zone ID',
                'image' => asset('asset/img/products/ml-br.png'),
                'variants' => [
                    ['name' => '86 Diamonds', 'price' => 'Rp 19.000'],
                    ['name' => '172 Diamonds', 'price' => 'Rp 36.000'],
                    ['name' => '257 Diamonds', 'price' => 'Rp 55.000'],
                    ['name' => '344 Diamonds', 'price' => 'Rp 69.500'],
                    ['name' => '429 Diamonds', 'price' => 'Rp 88.000'],
                    ['name' => '516 Diamonds', 'price' => 'Rp 110.000'],
                    ['name' => '600 Diamonds', 'price' => 'Rp 125.000'],
                    ['name' => '706 Diamonds', 'price' => 'Rp 145.000'],
                    ['name' => '878 Diamonds', 'price' => 'Rp 178.000'],
                    ['name' => '963 Diamonds', 'price' => 'Rp 203.000'],
                    ['name' => '1050 Diamonds', 'price' => 'Rp 215.000'],
                    ['name' => '1220 Diamonds', 'price' => 'Rp 250.000'],
                    ['name' => '1412 Diamonds', 'price' => 'Rp 285.000'],
                    ['name' => '1669 Diamonds', 'price' => 'Rp 350.000'],
                    ['name' => '2195 Diamonds', 'price' => 'Rp 440.000'],
                    ['name' => '3688 Diamonds', 'price' => 'Rp 700.000'],
                    ['name' => '5532 Diamonds', 'price' => 'Rp 1.035.000'],
                    ['name' => '9288 Diamonds', 'price' => 'Rp 1.800.000'],
                    //WeeklyPass
                    ['name' => 'Weekly Pass', 'price' => 'Rp 22.000'],
                ]
            ],
            [
                'id' => 29, 
                'name' => 'MLBB Region Philippines',
                'category' => 'Top Up Game',
                'is_double' => true,
                'input_label' => 'User ID',
                'input_label2' => 'Zone ID',
                'image' => asset('asset/img/products/ml-ph.png'),
                'variants' => [
                    ['name' => '5 Diamonds', 'price' => 'Rp 2.000'],
                    ['name' => '56 Diamonds', 'price' => 'Rp 14.200'],
                    ['name' => '112 Diamonds', 'price' => 'Rp 27.500'],
                    ['name' => '275 Diamonds', 'price' => 'Rp 70.000'],
                    ['name' => '336 Diamonds', 'price' => 'Rp 85.000'],
                    ['name' => '570 Diamonds', 'price' => 'Rp 136.000'],
                    ['name' => '1163 Diamonds', 'price' => 'Rp 275.000'],
                    ['name' => '2398 Diamonds', 'price' => 'Rp 574.000'],
                    ['name' => '6042 Diamonds', 'price' => 'Rp 1.400.000'],
                    //WeeklyPass
                    ['name' => 'Weekly Pass', 'price' => 'Rp 28.000'],
                ]
            ],
            [
                'id' => 30, 
                'name' => 'MLBB Region Singapore',
                'category' => 'Top Up Game',
                'is_double' => true,
                'input_label' => 'User ID',
                'input_label2' => 'Zone ID',
                'image' => asset('asset/img/products/ml-sg.png'),
                'variants' => [
                    ['name' => '14 Diamonds', 'price' => 'Rp 4.500'],
                    ['name' => '56 Diamonds', 'price' => 'Rp 17.000'],
                    ['name' => '140 Diamonds', 'price' => 'Rp 42.000'],
                    ['name' => '284 Diamonds', 'price' => 'Rp 84.500'],
                    ['name' => '355 Diamonds', 'price' => 'Rp 105.000'],
                    ['name' => '429 Diamonds', 'price' => 'Rp 123.000'],
                    ['name' => '569 Diamonds', 'price' => 'Rp 170.000'],
                    ['name' => '716 Diamonds', 'price' => 'Rp 202.000'],
                    ['name' => '808 Diamonds', 'price' => 'Rp 235.000'],
                    ['name' => '1084 Diamonds', 'price' => 'Rp 317.500'],
                    ['name' => '1145 Diamonds', 'price' => 'Rp 340.000'],
                    ['name' => '1446 Diamonds', 'price' => 'Rp 410.000'],
                    ['name' => '1788 Diamonds', 'price' => 'Rp 518.000'],
                    ['name' => '2976 Diamonds', 'price' => 'Rp 845.000'],
                    ['name' => '3692 Diamonds', 'price' => 'Rp 1.060.000'],
                    ['name' => '5952 Diamonds', 'price' => 'Rp 1.690.000'],
                    ['name' => '6381 Diamonds', 'price' => 'Rp 1.815.000'],
                    ['name' => '7502 Diamonds', 'price' => 'Rp 2.000.000'],
                    //WeeklyPass
                    ['name' => 'Weekly Pass', 'price' => 'Rp 35.000'],
                ]
            ],
            [
                'id' => 31, 
                'name' => 'MLBB Region Global',
                'category' => 'Top Up Game',
                'is_double' => true,
                'input_label' => 'User ID',
                'input_label2' => 'Zone ID',
                'image' => asset('asset/img/products/ml.jpg'),
                'variants' => [
                    ['name' => '86 Diamonds', 'price' => 'Rp 2.000'],
                    ['name' => '172 Diamonds', 'price' => 'Rp 14.200'],
                    ['name' => '257 Diamonds', 'price' => 'Rp 27.500'],
                    ['name' => '344 Diamonds', 'price' => 'Rp 70.000'],
                    ['name' => '429 Diamonds', 'price' => 'Rp 85.000'],
                    ['name' => '514 Diamonds', 'price' => 'Rp 136.000'],
                    ['name' => '600 Diamonds', 'price' => 'Rp 275.000'],
                    ['name' => '706 Diamonds', 'price' => 'Rp 574.000'],
                    ['name' => '888 Diamonds', 'price' => 'Rp 208.000'],
                    ['name' => '963 Diamonds', 'price' => 'Rp 212.000'],
                    ['name' => '1050 Diamonds', 'price' => 'Rp 235.000'],
                    ['name' => '1220 Diamonds', 'price' => 'Rp 270.000'],
                    ['name' => '1412 Diamonds', 'price' => 'Rp 310.000'],
                    ['name' => '1669 Diamonds', 'price' => 'Rp 368.000'],
                    ['name' => '2195 Diamonds', 'price' => 'Rp 460.000'],
                    ['name' => '3688 Diamonds', 'price' => 'Rp 770.000'],
                    ['name' => '5532 Diamonds', 'price' => 'Rp 1.155.000'],
                    ['name' => '9288 Diamonds', 'price' => 'Rp 1.950.000'],
                    //WeeklyPass
                    ['name' => 'Weekly Pass', 'price' => 'Rp 25.000'],
                ]
            ],
            [
                'id' => 32, 
                'name' => 'MLBB Region Russia',
                'category' => 'Top Up Game',
                'is_double' => true,
                'input_label' => 'User ID',
                'input_label2' => 'Zone ID',
                'image' => asset('asset/img/products/ml-rs.png'),
                'variants' => [
                    //WeeklyPass
                    ['name' => 'Weekly Pass', 'price' => 'Rp 36.000'],
                ]
            ],
            [
                'id' => 33, 
                'name' => 'TikTok',
                'category' => 'Sosial Media',
                'is_double' => false,
                'input_label' => 'Link Video / Username',
                'input_label2' => null,
                'image' => asset('asset/img/products/tiktok2.png'),
                'variants' => [
                    // UP-FOLLS WEB
                    ['name' => '100 Follows (Web)', 'price' => 'Rp 6.000'],
                    ['name' => '200 Follows (Web)', 'price' => 'Rp 12.000'],
                    ['name' => '300 Follows (Web)', 'price' => 'Rp 18.000'],
                    ['name' => '400 Follows (Web)', 'price' => 'Rp 24.000'],
                    ['name' => '500 Follows (Web)', 'price' => 'Rp 30.000'],

                    // UP-FOLLS INDO WEB
                    ['name' => '100 Follows Indo (Web)', 'price' => 'Rp 10.000'],
                    ['name' => '200 Follows Indo (Web)', 'price' => 'Rp 20.000'],
                    ['name' => '300 Follows Indo (Web)', 'price' => 'Rp 30.000'],
                    ['name' => '400 Follows Indo (Web)', 'price' => 'Rp 40.000'],
                    ['name' => '500 Follows Indo (Web)', 'price' => 'Rp 50.000'],

                    // UP-LIKE BOT MIX
                    ['name' => '100 Likes Bot Mix', 'price' => 'Rp 1.000'],
                    ['name' => '200 Likes Bot Mix', 'price' => 'Rp 2.000'],
                    ['name' => '300 Likes Bot Mix', 'price' => 'Rp 3.000'],
                    ['name' => '400 Likes Bot Mix', 'price' => 'Rp 4.000'],
                    ['name' => '500 Likes Bot Mix', 'price' => 'Rp 5.000'],

                    // UP-LIKE INDO WEB
                    ['name' => '100 Likes Indo (Web)', 'price' => 'Rp 5.000'],
                    ['name' => '200 Likes Indo (Web)', 'price' => 'Rp 10.000'],
                    ['name' => '300 Likes Indo (Web)', 'price' => 'Rp 15.000'],
                    ['name' => '400 Likes Indo (Web)', 'price' => 'Rp 20.000'],
                    ['name' => '500 Likes Indo (Web)', 'price' => 'Rp 25.000'],

                    // UP-VIEW WEB
                    ['name' => '1.000 Views (Web)', 'price' => 'Rp 1.000'],
                    ['name' => '2.000 Views (Web)', 'price' => 'Rp 2.000'],
                    ['name' => '3.000 Views (Web)', 'price' => 'Rp 3.000'],
                    ['name' => '4.000 Views (Web)', 'price' => 'Rp 4.000'],
                    ['name' => '5.000 Views (Web)', 'price' => 'Rp 5.000'],

                    // UP-COMMENT INDO
                    ['name' => '10 Komentar Indo', 'price' => 'Rp 5.000'],
                    ['name' => '100 Komentar Indo', 'price' => 'Rp 50.000'],
                    ['name' => '300 Komentar Indo', 'price' => 'Rp 150.000'],
                    ['name' => '400 Komentar Indo', 'price' => 'Rp 200.000'],
                    ['name' => '500 Komentar Indo', 'price' => 'Rp 250.000'],
                ]
            ],
            [
                'id' => 34, // Lanjutin urutan ID project kamu
                'name' => 'Instagram',
                'category' => 'Sosial Media',
                'is_double' => false,
                'input_label' => 'Username / Link Post / Link Story',
                'input_label2' => null,
                'image' => asset('asset/img/products/instagram.png'),
                'variants' => [
                    // UP-FOLLS WEB
                    ['name' => '100 Follows (Web)', 'price' => 'Rp 5.000'],
                    ['name' => '200 Follows (Web)', 'price' => 'Rp 10.000'],
                    ['name' => '300 Follows (Web)', 'price' => 'Rp 15.000'],
                    ['name' => '400 Follows (Web)', 'price' => 'Rp 20.000'],
                    ['name' => '500 Follows (Web)', 'price' => 'Rp 25.000'],

                    // UP-FOLLS INDO WEB
                    ['name' => '100 Follows Indo (Web)', 'price' => 'Rp 6.000'],
                    ['name' => '200 Follows Indo (Web)', 'price' => 'Rp 12.000'],
                    ['name' => '300 Follows Indo (Web)', 'price' => 'Rp 18.000'],
                    ['name' => '400 Follows Indo (Web)', 'price' => 'Rp 24.000'],
                    ['name' => '500 Follows Indo (Web)', 'price' => 'Rp 30.000'],

                    // UP-LIKE BOT WEB
                    ['name' => '100 Likes Bot (Web)', 'price' => 'Rp 2.000'],
                    ['name' => '200 Likes Bot (Web)', 'price' => 'Rp 4.000'],
                    ['name' => '300 Likes Bot (Web)', 'price' => 'Rp 6.000'],
                    ['name' => '400 Likes Bot (Web)', 'price' => 'Rp 8.000'],
                    ['name' => '500 Likes Bot (Web)', 'price' => 'Rp 10.000'],

                    // UP-LIKE INDO WEB
                    ['name' => '100 Likes Indo (Web)', 'price' => 'Rp 5.000'],
                    ['name' => '200 Likes Indo (Web)', 'price' => 'Rp 10.000'],
                    ['name' => '300 Likes Indo (Web)', 'price' => 'Rp 15.000'],
                    ['name' => '400 Likes Indo (Web)', 'price' => 'Rp 20.000'],
                    ['name' => '500 Likes Indo (Web)', 'price' => 'Rp 25.000'],

                    // UP-VIEW STORY INDO
                    ['name' => '100 Views Story Indo', 'price' => 'Rp 3.000'],
                    ['name' => '200 Views Story Indo', 'price' => 'Rp 6.000'],
                    ['name' => '300 Views Story Indo', 'price' => 'Rp 9.000'],
                    ['name' => '400 Views Story Indo', 'price' => 'Rp 12.000'],
                    ['name' => '500 Views Story Indo', 'price' => 'Rp 15.000'],

                    // UP-VIEW REELS
                    ['name' => '1.000 Views Reels', 'price' => 'Rp 1.000'],
                    ['name' => '2.000 Views Reels', 'price' => 'Rp 2.000'],
                    ['name' => '3.000 Views Reels', 'price' => 'Rp 3.000'],
                    ['name' => '4.000 Views Reels', 'price' => 'Rp 4.000'],
                    ['name' => '5.000 Views Reels', 'price' => 'Rp 5.000'],

                    // UP-COMMENT INDO
                    ['name' => '10 Komentar Indo', 'price' => 'Rp 5.000'],
                    ['name' => '100 Komentar Indo', 'price' => 'Rp 50.000'],
                    ['name' => '300 Komentar Indo', 'price' => 'Rp 150.000'],
                    ['name' => '400 Komentar Indo', 'price' => 'Rp 200.000'],
                    ['name' => '500 Komentar Indo', 'price' => 'Rp 250.000'],
                ]
            ]
        ];

        return view('index', compact('products'));
    }
}
