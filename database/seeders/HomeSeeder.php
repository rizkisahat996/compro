<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('homes')->insert([
            'title' => 'CV. MughniLintasNusa',
            'text' => 'CV. MUGHNI LINTASNUSA adalah perusahaan yang bergerak di bidang Konstruksi dan Jasa yang berdiri pada 04 Februari 2020. CV. MUGHNI LINTASNUSA saat ini fokus terhadap pengerjaan Perlengkapan Jalan dan Pengadaan Barang. ',
            'image' =>'112.png',
        ]);
    }
}
