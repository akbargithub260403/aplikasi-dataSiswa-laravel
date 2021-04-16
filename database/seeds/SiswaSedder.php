<?php

use Illuminate\Database\Seeder;

class SiswaSedder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswa')->insert([
        	'id'	=> 6,
            'nama' => 'Hilman Sandi',
            'NISN' => '00291201',
            'jenis_kelamin' => 'Laki Laki',
            'alamat' => 'Bandung Barat',
        ]);
    }
}
