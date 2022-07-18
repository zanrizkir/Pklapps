<?php

namespace App\Http\Controllers;

class LatihanControler extends Controller
{
    // Latihan 1
    public function latihan1()
    {
        $menu = [
            [
                'nama' => 'Beranda',
            ],
            [
                'nama' => 'Berita',
                'submenu' => [
                    [
                        'nama_berita' => 'Olahraga',
                        'kategori' => ['sepak bola', 'bulu tangking'],
                    ],
                    [
                        'nama_berita' => 'Politik',
                    ],
                    [
                        'nama_berita' => 'Manca Negara',
                    ],
                ],
            ],
            [
                'nama' => 'Tentang',
            ],
        ];

        // dd($menu);
        return view('pages.latihan1', ['menu' => $menu]);
    }

    // Latihan 2
    public function kampus()
    {
        $dosen = [
            [
                'nama' => 'Yusuf Bachtiar',
                'matkul' => 'Pemrograman Mobile',
                'mahasiswa' => [['no' => 1, 'nama' => 'Muhammad Soleh', 'nilai' => 78], ['no' => 2, 'nama' => 'Jujun Junaedi', 'nilai' => 85], ['no' => 3, 'nama' => 'Mamat Alkatiri', 'nilai' => 90], ['no' => 4, 'nama' => 'Ubay Holin', 'nilai' => 87], ['no' => 5, 'nama' => 'Fadilah', 'nilai' => 95]],
            ],
            [
                'nama' => 'Yaris Riyadi Yusuf',
                'matkul' => 'Pemrograman Web',
                'mahasiswa' => [['no' => 1, 'nama' => 'Alfred McTominay', 'nilai' => 67], ['no' => 2, 'nama' => 'bruno Kasmir', 'nilai' => 90], ['no' => 3, 'nama' => 'Akid Hendra', 'nilai' => 50], ['no' => 4, 'nama' => 'Dany Irawan', 'nilai' => 70], ['no' => 5, 'nama' => 'Chandra Mega', 'nilai' => 60]],
            ],
        ];
        // dd($dosen);
        return view('pages.kampus', ['dosen' => $dosen]);
    }

    // Latihan 3
    public function latihan3()
    {
        $tv = [
            [
                'siaran' => 'NET TV',
                'jadwal_tayang' => [
                    [
                        'nama_program' => 'Dragon Ball',
                        'jam_tayang' => '08.00',
                        'tanggal_tayang' => '7 Juli 2022',
                    ],
                    [
                        'nama_program' => 'Naruto',
                        'jam_tayang' => '09.00',
                        'tanggal_tayang' => '7 Juli 2022',
                    ],
                    [
                        'nama_program' => 'TOKYO GHOUL',
                        'jam_tayang' => '10.00',
                        'tanggal_tayang' => '7 Juli 2022',
                    ],
                ],
            ],
            [
                'siaran' => 'TVRI',
                'jadwal_tayang' => [
                    [
                        'nama_program' => 'Berita Lokal',
                        'jam_tayang' => '12.00',
                        'tanggal_tayang' => '12 Juli 2022',
                    ],
                    [
                        'nama_program' => 'Berita Luar Negri',
                        'jam_tayang' => '14.00',
                        'tanggal_tayang' => '12 Juli 2022',
                    ],
                    [
                        'nama_program' => 'Berita Global',
                        'jam_tayang' => '16.00',
                        'tanggal_tayang' => '12 Juli 2022',
                    ],
                ],
            ],
            [
                'siaran' => 'BEINSPORT',
                'jadwal_tayang' => [
                    [
                        'nama_program' => 'Sepak Bola',
                        'jam_tayang' => '20.00',
                        'tanggal_tayang' => '20 Juli 2022',
                    ],
                    [
                        'nama_program' => 'E-Sport',
                        'jam_tayang' => '19.00',
                        'tanggal_tayang' => '20 Juli 2022',
                    ],
                    [
                        'nama_program' => 'NBA',
                        'jam_tayang' => '17.00',
                        'tanggal_tayang' => '20 Juli 2022',
                    ],
                ],
            ],
            [
                'siaran' => 'OCHANNEL',
                'jadwal_tayang' => [
                    [
                        'nama_program' => 'One Piece',
                        'jam_tayang' => '07.00',
                        'tanggal_tayang' => '23 Juli 2022',
                    ],
                    [
                        'nama_program' => 'Kuliner Lokal',
                        'jam_tayang' => '09.00',
                        'tanggal_tayang' => '23 Juli 2022',
                    ],
                    [
                        'nama_program' => 'Satwa Liar',
                        'jam_tayang' => '12.00',
                        'tanggal_tayang' => '23 Juli 2022',
                    ],
                ],
            ],
            [
                'siaran' => 'Indosiar',
                'jadwal_tayang' => [
                    [
                        'nama_program' => 'Persib vs Evos',
                        'jam_tayang' => '21.00',
                        'tanggal_tayang' => '21 Juli 2022',
                    ],
                    [
                        'nama_program' => 'Bali United vs Rrq',
                        'jam_tayang' => '16.00',
                        'tanggal_tayang' => '21 Juli 2022',
                    ],
                    [
                        'nama_program' => 'Arema vs Onik',
                        'jam_tayang' => '20.00',
                        'tanggal_tayang' => '21 Juli 2022',
                    ],
                ],
            ],
        ]; 
        // dd($tv);
        return view('pages.latihan3', ['tv' => $tv]);
    }
}
