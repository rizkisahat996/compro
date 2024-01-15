<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cards = [
        [
            'header' =>'1',
            'image' =>'20211222162149.svg',
            'text' =>'Result Oriented',
            'title' => 'Kami Fokus pada Hasil dan Pencapaian
',
        ],
        [
            'header' =>'2',
            'image' =>'20220103082526.svg',
            'text' =>'Commitment',
            'title' => 'Kami terus berupaya untuk Memberikan hasil terbaik
',
        ],
        [
            'header' =>'3',
            'image' =>'20220103082637.svg',
            'text' =>'Quality',
            'title' => 'Kami berdedikasi untuk menggunakan produk yang berkualitas
',
        ],
        [
            'header' =>'4',
            'image' =>'inte1.svg',
            'text' =>'Integrity',
            'title' => 'Kami mengutamakan kejujuran
',
        ],
        [
            'header' =>'5',
            'image' =>'accc2.svg',
            'text' =>'Accountability',
            'title' => 'Kami bertanggung jawab atas pekerjaan dan menghormati komitmen kami.
',
        ],
        [
            'header' =>'6',
            'image' =>'efff2.svg',
            'text' =>'Effective and Efficient',
            'title' => 'Terus menyederhanakan dan meningkatkan proses, prosedur dan aktivitas
',
        ],
        [
            'header' =>'7',
            'image' =>'spr212.svg',
            'text' =>'Spirit',
            'title' => 'Kami menciptakan budaya dimana ide bisa terus dikembangkan.
',
        ],
        ];

        DB::table('cards')->insert($cards);
    }
}
