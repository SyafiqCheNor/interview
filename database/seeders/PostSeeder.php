<?php

namespace Database\Seeders;

use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            [
                'author_id' => 1,
                'category_id' => 1,
                'post_date' => Carbon::now()->subDay(),
                'title' => 'PRN: Kesemua 19 calon Muda telah isytihar aset',
                'excerpt' => 'PETALING JAYA - Kesemua 19 calon Parti Ikatan Demokratik Malaysia (Muda) yang bertanding pada Pilihan Raya Negeri (PRN) 12 Ogos ini telah mengisytiharkan semua aset, termasuk senarai aset dan liabiliti terkumpul dalam akuan berkanun (SD)'
            ],
            [
                'author_id' => 1,
                'category_id' => 2,
                'post_date' => Carbon::now()->subDay(2),
                'title' => 'Terbuka Australia: Nur Izzuddin kecewa tewas, hempas raket',
                'excerpt' => 'IMPIAN beregu lelaki negara, Nur Izzuddin Rumsani-Goh Sze Fei untuk melangkah lebih jauh dalam Kejohanan Badminton Terbuka Australia'
            ],
            [
                'author_id' => 2,
                'category_id' => 2,
                'post_date' => Carbon::now()->subDay(10),
                'title' => 'Pelaburan tambahan Infineon selaras gagasan Ekonomi Madani - PM',
                'excerpt' => 'KUALA LUMPUR - Pengumuman pelaburan tambahan sehingga lima bilion euro (1 euro=RM4.99) oleh Infineon Technologies AG (Infineon)..'

            ],
            [
                'author_id' => 2,
                'category_id' => 1,
                'post_date' => Carbon::now()->subDay(30),
                'title' => 'Cef Wan hidap kanser limfoma',
                'excerpt' => 'SHAH ALAM - Cef selebriti terkenal, Datuk Redzuawan Ismail atau lebih dikenali sebagai Cef Wan pada Khamis mendedahkan...'
            ]

        ];

        foreach($posts as $data)
        {
            Post::create([
                'author_id'     => $data['author_id'],
                'category_id'   => $data['category_id'],
                'post_date'     => $data['post_date'],
                'title'         => $data['title'],
                'excerpt'       => $data['excerpt'],
            ]);
        }
    }
}
