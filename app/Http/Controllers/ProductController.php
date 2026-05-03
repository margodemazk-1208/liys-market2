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
                    ['name' => '1p1u 1 Hari', 'price' => 'Rp 4.000'],
                    ['name' => '1p1u 3 Hari', 'price' => 'Rp 7.000'],
                    ['name' => '1p1u 7 Hari', 'price' => 'Rp 12.000'],
                    ['name' => '1p1u 1 Bulan', 'price' => 'Rp 30.000'],
                    ['name' => '1p2u 1 Bulan', 'price' => 'Rp 17.000'],
                    ['name' => 'Semi Private 1 Bulan', 'price' => 'Rp 35.000'],
                    ['name' => 'Private 1 Bulan', 'price' => 'Rp 150.000'],
                ]
            ],
            [
                'id' => 2,
                'name' => 'WeTV Vip',
                'category' => 'Streaming',
                'is_double' => true,
                'input_label' => 'Nama',
                'input_label2' => 'Nomor Telepon',
                'image' => asset('asset/img/products/wetv.jpg'),
                'variants' => [
                    ['name' => '1 Bulan Sharing', 'price' => 'Rp 10.000'],
                    ['name' => '2 Bulan Sharing', 'price' => 'Rp 15.000'],
                    ['name' => '3 Bulan Sharing', 'price' => 'Rp 25.000'],
                    ['name' => '1 Bulan Private', 'price' => 'Rp 28.000'],
                ]
            ],
            [
                'id' => 3,
                'name' => 'Vidio Platinum & Ultimate',
                'category' => 'Streaming',
                'is_double' => true,
                'input_label' => 'Nama',
                'input_label2' => 'Nomor Telepon',
                'image' => asset('asset/img/products/v.png'),
                'variants' => [
                    // Platinum
                    ['name' => 'Platinum 1B (2 User)', 'price' => 'Rp 20.000'],
                    ['name' => 'Platinum 1B Private', 'price' => 'Rp 35.000'],
                    // Platinum Extra
                    ['name' => 'Extra 1B All Dev', 'price' => 'Rp 65.000'],
                    ['name' => 'Extra 1B Mobile', 'price' => 'Rp 45.000'],
                    // Ultimate
                    ['name' => 'Ultimate 1B All Dev', 'price' => 'Rp 155.000'],
                    ['name' => 'Ultimate 1B Mobile', 'price' => 'Rp 87.000'],
                    // Only TV
                    ['name' => 'Only TV 1B Private', 'price' => 'Rp 15.000'],
                ]
            ],
            [
                'id' => 4,
                'name' => 'Roblox Instant (Via Login)',
                'category' => 'Top Up Game',
                'is_double' => true,
                'input_label' => 'Username',
                'input_label2' => 'Password',
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
                'input_label2' => 'ID Gamepass',
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
                    ['name' => '1 Bulan Private', 'price' => 'Rp 8.000'],
                    ['name' => '2 Bulan Private', 'price' => 'Rp 11.000'],
                    ['name' => '3 Bulan Private', 'price' => 'Rp 15.000'],
                    ['name' => '6 Bulan Private', 'price' => 'Rp 18.000'],
                    ['name' => '1 Tahun Private', 'price' => 'Rp 21.000'],
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
                    ['name' => '1 Hari Share', 'price' => 'Rp 2.500'],
                    ['name' => '3 Hari Share', 'price' => 'Rp 5.000'],
                    ['name' => '7 Hari share', 'price' => 'Rp 7.000'],
                    ['name' => '1 Bulan Share', 'price' => 'Rp 11.000'],
                    ['name' => '1 Bulan Private', 'price' => 'Rp 18.000'],
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
                    ['name' => 'Family 1 Bulan', 'price' => 'Rp 8.000'],
                    ['name' => 'Family 2 Bulan', 'price' => 'Rp 13.000'],
                    ['name' => 'Family 3 Bulan', 'price' => 'Rp 18.000'],
                    ['name' => 'Family 4 Bulan', 'price' => 'Rp 23.000'],
                    ['name' => 'Individual 1 Bulan', 'price' => 'Rp 12.000'],
                    ['name' => 'Individual 3 Bulan', 'price' => 'Rp 30.000'],

                ]
            ],
            [
                'id' => 9,
                'name' => 'IQIYI VIP',
                'category' => 'Streaming',
                'is_double' => true,
                'input_label' => 'Nama',
                'input_label2' => 'Nomor Telepon',
                'image' => asset('asset/img/products/iqiyi.jpg'),
                'variants' => [
                    ['name' => 'Sharing 1 Hari', 'price' => 'Rp 3.000'],
                    ['name' => 'Sharing 3 Hari', 'price' => 'Rp 6.000'],
                    ['name' => 'Sharing 7 Hari', 'price' => 'Rp 9.000'],
                    ['name' => 'Sharing 1 Bulan', 'price' => 'Rp 11.000'],
                    ['name' => 'Sharing 1 Bulan (Anti Limit)', 'price' => 'Rp 17.000'],
                    ['name' => 'Private Standar  1 Bulan', 'price' => 'Rp 22.000'],
                    ['name' => 'Private Premium 1 Bulan', 'price' => 'Rp 28.000'],

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
                    ['name' => '1 Hari Share', 'price' => 'Rp 2.500'],
                    ['name' => '3 Hari Share', 'price' => 'Rp 5.000'],
                    ['name' => '7 Hari share', 'price' => 'Rp 7.000'],
                    ['name' => '1 Bulan Share', 'price' => 'Rp 11.000'],
                    ['name' => '1 Bulan Private', 'price' => 'Rp 18.000'],
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
                    ['name' => 'Sharing 1 Hari', 'price' => 'Rp 2.500'],
                    ['name' => 'Sharing 3 Hari', 'price' => 'Rp 5.500'],
                    ['name' => 'Sharing 7 Hari', 'price' => 'Rp 8.000'],
                    ['name' => 'Sharing 1 Bulan 5 User', 'price' => 'Rp 13.500'],
                    ['name' => 'Sharing 1 Bulan 3 User', 'price' => 'Rp 17.000'],
                    ['name' => 'Private 1 Bulan', 'price' => 'Rp 30.000'],
                ]
            ],
            [
                'id' => 12,
                'name' => 'Spotify Premium',
                'category' => 'Streaming',
                'is_double' => true,
                'input_label' => 'Nama',
                'input_label2' => 'Nomor Telepon',
                'image' => asset('asset/img/products/spotify.jpg'),
                'variants' => [
                    ['name' => '1 Bulan Famplan', 'price' => 'Rp 15.000'],
                    ['name' => '1 Bulan Indplan', 'price' => 'Rp 18.000'],
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
                    ['name' => '1 Bulan Imess', 'price' => 'Rp 8.000'],
                    ['name' => '2 Bulan Imess', 'price' => 'Rp 13.000'],
                    ['name' => '3 Bulan Imess', 'price' => 'Rp 18.000'],
                    ['name' => '4 Bulan Imess', 'price' => 'Rp 23.000'],
                    ['name' => '1 Bulan Indplan', 'price' => 'Rp 15.000'],
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
                    ['name' => 'Pro 1 Hari', 'price' => 'Rp 2.000'],
                    ['name' => 'Pro 3 Hari', 'price' => 'Rp 4.000'],
                    ['name' => 'Pro 7 Hari', 'price' => 'Rp 6.000'],
                    ['name' => 'Pro 1 Bulan', 'price' => 'Rp 10.000'],
                    ['name' => 'Pro 2 Bulan', 'price' => 'Rp 12.000'],
                    ['name' => 'Pro 3 Bulan', 'price' => 'Rp 15.000'],
                    ['name' => 'Pro 6 Bulan', 'price' => 'Rp 18.000'],
                    ['name' => 'Pro 12 Bulan', 'price' => 'Rp 22.000'],
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
                    ['name' => 'Sharing 1 Tahun', 'price' => '5.000'],
                    ['name' => 'Private 1 Tahun', 'price' => 'Rp 10.000']
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
                    ['name' => 'Private 7 Hari', 'price' => 'Rp 5.000'],
                    ['name' => 'Private 1 Bulan', 'price' => 'Rp 10.000'],
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
                    ['name' => 'Sharing 7 Hari Web', 'price' => 'Rp 7.000'],
                ]
            ],
            [
                'id' => 20,
                'name' => 'Chatgpt',
                'category' => 'Education Apps',
                'is_double' => true,
                'input_label' => 'Nama',
                'input_label2' => 'Nomor Telepon',
                'image' => asset('asset/img/products/chatgpt.jpg'),
                'variants' => [
                    ['name' => '1 Hari Member', 'price' => 'Rp 3.500'],
                    ['name' => '3 Hari Member', 'price' => 'Rp 5.000'],
                    ['name' => '7 Hari Member', 'price' => 'Rp 8.500'],
                    ['name' => '1 Bulan Member', 'price' => 'Rp 23.000'],
                    ['name' => '1 Bulan Private Plus', 'price' => 'Rp 30.000'],
                ]
            ],
            [
                'id' => 21,
                'name' => 'Gemini AI',
                'category' => 'Education Apps',
                'is_double' => true,
                'input_label' => 'Nama',
                'input_label2' => 'Nomor Telepon',
                'image' => asset('asset/img/products/gemini.png'),
                'variants' => [
                    ['name' => 'Family Plan 1 Bulan', 'price' => 'Rp 5.000'],
                    ['name' => 'Family Plan 3 Bulan', 'price' => 'Rp 15.000'],
                    ['name' => 'Family Plan 1 Tahun', 'price' => 'Rp 30.000'],
                    ['name' => 'Head 1 Bulan', 'price' => 'Rp 20.000'],
                ]
            ],
            [
                'id' => 22,
                'name' => 'Zoom Pro',
                'category' => 'Education Apps',
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
            ],
            [
                'id' => 35,
                'name' => 'Disney+ Premium',
                'category' => 'Streaming',
                'is_double' => true,
                'input_label' => 'Nama',
                'input_label2' => 'Nomor Telepon',
                'image' => asset('asset/img/products/disney.jpg'),
                'variants' => [
                    ['name' => '1 Hari Share 6 User', 'price' => 'Rp 5.000'],
                    ['name' => '3 Hari Share 6 User', 'price' => 'Rp 10.000'],
                    ['name' => '5 Hari Share 6 User', 'price' => 'Rp 15.000'],
                    ['name' => '7 Hari Share 6 User', 'price' => 'Rp 17.000'],
                    ['name' => '1 Bulan Share 6 User', 'price' => 'Rp 30.000'],
                    ['name' => '1 Bulan Share 3 User', 'price' => 'Rp 52.000'],
                    ['name' => '1 Bulan Private', 'price' => 'Rp 140.000'],
                ]
            ],
            [
                'id' => 38,
                'name' => 'Youku Premium',
                'category' => 'Streaming',
                'is_double' => true,
                'input_label' => 'Nama',
                'input_label2' => 'Nomor Telepon',
                'image' => asset('asset/img/products/youku.jpg'),
                'variants' => [
                    ['name' => '1 Bulan Sharing', 'price' => 'Rp 10.000'],
                    ['name' => '2 Bulan Sharing', 'price' => 'Rp 15.000'],
                    ['name' => '3 Bulan Sharing', 'price' => 'Rp 25.000'],
                    ['name' => '1 Bulan Private', 'price' => 'Rp 28.000'],
                ]
            ],
            [
                'id' => 39,
                'name' => 'Drakor ID Premium',
                'category' => 'Streaming',
                'is_double' => true,
                'input_label' => 'Nama',
                'input_label2' => 'Nomor Telepon',
                'image' => asset('asset/img/products/drakorid.png'),
                'variants' => [
                    ['name' => '1 Bulan Sharing', 'price' => 'Rp 10.000'],
                    ['name' => '1 Tahun Sharing', 'price' => 'Rp 25.000'],
                    ['name' => '1 Bulan Private', 'price' => 'Rp 25.000'],
                ]
            ],
            [
                'id' => 40,
                'name' => 'GagaOOLala Premium',
                'category' => 'Streaming',
                'is_double' => true,
                'input_label' => 'Nama',
                'input_label2' => 'Nomor Telepon',
                'image' => asset('asset/img/products/gagaoolala.jpg'),
                'variants' => [
                    ['name' => '1 Bulan Sharing', 'price' => 'Rp 15.000'],
                ]
            ],
            [
                'id' => 41,
                'name' => 'Picsart Pro',
                'category' => 'Editor Apps',
                'is_double' => true,
                'input_label' => 'Nama',
                'input_label2' => 'Nomor Telepon',
                'image' => asset('asset/img/products/picsart.png'),
                'variants' => [
                    ['name' => '1 Bulan Sharing', 'price' => 'Rp 7.000'],
                    ['name' => '1 Bulan Private', 'price' => 'Rp 12.000'],
                ]
            ],
            [
                'id' => 42,
                'name' => 'Ibis Paint X',
                'category' => 'Editor Apps',
                'is_double' => true,
                'input_label' => 'Nama',
                'input_label2' => 'Nomor Telepon',
                'image' => asset('asset/img/products/iblispaintx.png'),
                'variants' => [
                    ['name' => '1 Tahun Sharing', 'price' => 'Rp 30.000'],
                ]
            ],
            [
                'id' => 43,
                'name' => 'DazzCam',
                'category' => 'Editor Apps',
                'is_double' => true,
                'input_label' => 'Nama',
                'input_label2' => 'Nomor Telepon',
                'image' => asset('asset/img/products/dazzcam.png'),
                'variants' => [
                    ['name' => '1 Tahun Sharing', 'price' => 'Rp 16.000'],
                ]
            ],
            [
                'id' => 44,
                'name' => 'Lightroom',
                'category' => 'Editor Apps',
                'is_double' => true,
                'input_label' => 'Nama',
                'input_label2' => 'Nomor Telepon',
                'image' => asset('asset/img/products/lightroom.jpg'),
                'variants' => [
                    ['name' => '1 Tahun Sharing', 'price' => 'Rp 16.000'],
                ]
            ],
            [
                'id' => 45,
                'name' => 'Wattpad',
                'category' => 'Education Apps',
                'is_double' => true,
                'input_label' => 'Nama',
                'input_label2' => 'Nomor Telepon',
                'image' => asset('asset/img/products/wattpad.png'),
                'variants' => [
                    ['name' => '1 Bulan Sharing', 'price' => 'Rp 10.000'],
                    ['name' => '3 Bulan Sharing', 'price' => 'Rp 20.000'],
                    ['name' => '1 Tahun Sharing', 'price' => 'Rp 30.000'],
                ]
            ],
            [
                'id' => 46,
                'name' => 'MS365',
                'category' => 'Education Apps',
                'is_double' => true,
                'input_label' => 'Nama',
                'input_label2' => 'Nomor Telepon',
                'image' => asset('asset/img/products/ms365.png'),
                'variants' => [
                    ['name' => '1 Bulan Family Plan', 'price' => 'Rp 5.000'],
                    ['name' => '1 Bulan Head', 'price' => 'Rp 20.000'],
                ]
            ],
            [
                'id' => 47,
                'name' => 'GoodNotes',
                'category' => 'Education Apps',
                'is_double' => true,
                'input_label' => 'Nama',
                'input_label2' => 'Nomor Telepon',
                'image' => asset('asset/img/products/goodnotes.png'),
                'variants' => [
                    ['name' => '1 Tahun Sharing', 'price' => 'Rp 32.000'],
                ]
            ],
            [
                'id' => 48,
                'name' => 'Express VPN',
                'category' => 'Education Apps',
                'is_double' => true,
                'input_label' => 'Nama',
                'input_label2' => 'Nomor Telepon',
                'image' => asset('asset/img/products/expressvpn.png'),
                'variants' => [
                    ['name' => '1 Bulan Sharing', 'price' => 'Rp 8.000'],
                    ['name' => '1 Bulan Private', 'price' => 'Rp 15.000'],
                ]
            ],
            [
                'id' => 49,
                'name' => 'Subs Telegram',
                'category' => 'Sosial Media',
                'is_double' => true,
                'input_label' => 'Nama',
                'input_label2' => 'Nomor Telepon',
                'image' => asset('asset/img/products/telegram.png'),
                'variants' => [
                    ['name' => '100 Subs', 'price' => 'Rp 2.500'],
                    ['name' => '200 Subs', 'price' => 'Rp 5.000'],
                    ['name' => '300 Subs', 'price' => 'Rp 7.500'],
                    ['name' => '400 Subs', 'price' => 'Rp 10.000'],
                    ['name' => '500 Subs', 'price' => 'Rp 12.500'],
                ]
            ],
            [
                'id' => 50,
                'name' => 'Member Saluran WhatsApp',
                'category' => 'Sosial Media',
                'is_double' => true,
                'input_label' => 'Nama',
                'input_label2' => 'Nomor Telepon',
                'image' => asset('asset/img/products/whatsapp.png'),
                'variants' => [
                    ['name' => '100 Member', 'price' => 'Rp 5.000'],
                    ['name' => '200 Member', 'price' => 'Rp 10.000'],
                    ['name' => '300 Member', 'price' => 'Rp 15.000'],
                    ['name' => '400 Member', 'price' => 'Rp 20.000'],
                    ['name' => '500 Member', 'price' => 'Rp 25.000'],
                ]
            ],
            [
                'id' => 51,
                'name' => 'Subscriber Youtube Web',
                'category' => 'Sosial Media',
                'is_double' => true,
                'input_label' => 'Nama',
                'input_label2' => 'Nomor Telepon',
                'image' => asset('asset/img/products/youtube2.png'),
                'variants' => [
                    ['name' => '100 Subs', 'price' => 'Rp 7.000'],
                    ['name' => '200 Subs', 'price' => 'Rp 14.000'],
                    ['name' => '300 Subs', 'price' => 'Rp 21.000'],
                    ['name' => '400 Subs', 'price' => 'Rp 28.000'],
                    ['name' => '500 Subs', 'price' => 'Rp 35.000'],
                ]
            ],
            [
                'id' => 52,
                'name' => 'Like Youtube Web',
                'category' => 'Sosial Media',
                'is_double' => true,
                'input_label' => 'Nama',
                'input_label2' => 'Nomor Telepon',
                'image' => asset('asset/img/products/youtube2.png'),
                'variants' => [
                    ['name' => '100 Like', 'price' => 'Rp 5.000'],
                    ['name' => '200 Like', 'price' => 'Rp 10.000'],
                    ['name' => '300 Like', 'price' => 'Rp 15.000'],
                    ['name' => '400 Like', 'price' => 'Rp 20.000'],
                    ['name' => '500 Like', 'price' => 'Rp 25.000'],
                ]
            ],
            [
                'id' => 52,
                'name' => 'View Youtube Web',
                'category' => 'Sosial Media',
                'is_double' => true,
                'input_label' => 'Nama',
                'input_label2' => 'Nomor Telepon',
                'image' => asset('asset/img/products/youtube2.png'),
                'variants' => [
                    ['name' => '100 View', 'price' => 'Rp 5.000'],
                    ['name' => '200 View', 'price' => 'Rp 10.000'],
                    ['name' => '300 View', 'price' => 'Rp 15.000'],
                    ['name' => '400 View', 'price' => 'Rp 20.000'],
                    ['name' => '500 View', 'price' => 'Rp 25.000'],
                ]
            ],
            [
                'id' => 52,
                'name' => 'Follower Shopee',
                'category' => 'Sosial Media',
                'is_double' => true,
                'input_label' => 'Nama',
                'input_label2' => 'Nomor Telepon',
                'image' => asset('asset/img/products/shopee.png'),
                'variants' => [
                    ['name' => '100 Follower', 'price' => 'Rp 3.000'],
                    ['name' => '200 Follower', 'price' => 'Rp 6.000'],
                    ['name' => '300 Follower', 'price' => 'Rp 9.000'],
                    ['name' => '400 Follower', 'price' => 'Rp 12.000'],
                    ['name' => '500 Follower', 'price' => 'Rp 15.000'],
                ]
            ],
            [
                'id' => 52,
                'name' => 'Like Shopee',
                'category' => 'Sosial Media',
                'is_double' => true,
                'input_label' => 'Nama',
                'input_label2' => 'Nomor Telepon',
                'image' => asset('asset/img/products/shopee.png'),
                'variants' => [
                    ['name' => '100 Like', 'price' => 'Rp 1.000'],
                    ['name' => '200 Like', 'price' => 'Rp 2.000'],
                    ['name' => '300 Like', 'price' => 'Rp 3.000'],
                    ['name' => '400 Like', 'price' => 'Rp 4.000'],
                    ['name' => '500 Like', 'price' => 'Rp 5.000'],
                ]
            ],
            [
                'id' => 52,
                'name' => 'View Video Shopee',
                'category' => 'Sosial Media',
                'is_double' => true,
                'input_label' => 'Nama',
                'input_label2' => 'Nomor Telepon',
                'image' => asset('asset/img/products/shopee.png'),
                'variants' => [
                    ['name' => '100 View', 'price' => 'Rp 3.000'],
                    ['name' => '200 View', 'price' => 'Rp 6.000'],
                    ['name' => '300 View', 'price' => 'Rp 9.000'],
                    ['name' => '400 View', 'price' => 'Rp 12.000'],
                    ['name' => '500 View', 'price' => 'Rp 15.000'],
                ]
            ],
            [
                'id' => 53,
                'name' => 'Starlight Card / Via Gift',
                'category' => 'Mobile Legends',
                'is_double' => true,
                'input_label' => 'ID & Server',
                'input_label2' => 'Nickname',
                'image' => asset('asset/img/products/starlight.jpg'),
                'variants' => [
                    ['name' => 'SL Basic', 'price' => 'Rp 37.000'],
                    ['name' => 'SL Premium', 'price' => 'Rp 90.000'],
                ]
            ],
            [
                'id' => 54,
                'name' => 'Gift Skin / Via Pertemanan',
                'category' => 'Mobile Legends',
                'is_double' => true,
                'input_label' => 'ID (Server)',
                'input_label2' => 'Nickname',
                'image' => asset('asset/img/products/skin.png'),
                'variants' => [
                    // GIFT SKIN
                    ['name' => 'Normal Skin (269💎)', 'price' => 'Rp 35.000'],
                    ['name' => 'Normal Skin (299💎)', 'price' => 'Rp 38.000'],
                    ['name' => 'Elite Skin (399💎)', 'price' => 'Rp 50.000'],
                    ['name' => 'Elite Skin (599💎)', 'price' => 'Rp 70.000'],
                    ['name' => 'Special Skin (749💎)', 'price' => 'Rp 85.000'],
                    ['name' => 'Epic Skin (899💎)', 'price' => 'Rp 110.000'],
                    ['name' => 'Lightborn (1089💎)', 'price' => 'Rp 140.000'],
                ]
            ],
            [
                'id' => 55,
                'name' => 'Gift Item / Via Pertemanan',
                'category' => 'Mobile Legends',
                'is_double' => true,
                'input_label' => 'ID (Server)',
                'input_label2' => 'Nickname',
                'image' => asset('asset/img/products/item.png'),
                'variants' => [

                    // GIFT ITEM
                    ['name' => 'Create Squad (199💎)', 'price' => 'Rp 30.000'],
                    ['name' => 'Change Name (239💎)', 'price' => 'Rp 35.000'],
                    ['name' => 'SQ Change Name (299💎)', 'price' => 'Rp 38.000'],
                    ['name' => 'All Hero (599💎)', 'price' => 'Rp 70.000'],
                    ['name' => 'Change Flag (1000💎)', 'price' => 'Rp 125.000']
                ]
            ],
            [
                'id' => 56,
                'name' => 'Gift Charisma / Via Pertemanan',
                'category' => 'Mobile Legends',
                'is_double' => true,
                'input_label' => 'ID (Server)',
                'input_label2' => 'Nickname',
                'image' => asset('asset/img/products/charisma.png'),
                'variants' => [

                    // CHARISMA
                    ['name' => 'Charisma Item (20💎)', 'price' => 'Rp 2.500'],
                    ['name' => 'Angel Ark (499💎)', 'price' => 'Rp 60.000'],
                    ['name' => 'Gold Moon (999💎)', 'price' => 'Rp 130.000'],
                ]
            ],



        ];


        return view('index', compact('products'));
    }
}
