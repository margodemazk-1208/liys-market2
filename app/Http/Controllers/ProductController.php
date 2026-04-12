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
                'category' => 'Streaming',
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
                'category' => 'Streaming',
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

        ];

        return view('index', compact('products'));
    }
}
