<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('siswa')->insert([
            'nama' => 'Hilman Sandi',
            'NISN' => '00291201',
            'jenis_kelamin' => 'Laki Laki',
            'alamat' => 'Bandung Barat',
        ]);

        // $this->call(SiswaSedder::class);
    }
}
