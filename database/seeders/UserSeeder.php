<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user1 = User::create([
            'nama' => 'Fannie M Fadilah',
            'nip' => '152018002',
            'password' => bcrypt('123456789'),
            'nidn' => '54739872345978',
            'email' => 'fadilah@lppm.itenas.ac.id',
        ]);
        $user1 -> assignRole('dosen');

        $user2 = User::create([
            'nama' => 'Andika Fauzi',
            'nip' => '152018019',
            'password' => bcrypt('123456789'),
            'nidn' => '39081254789318',
            'email' => 'andika@lppm.itenas.ac.id',
        ]);
        $user2 -> assignRole('dosen');

        $user3 = User::create([
            'nama' => 'Gilang Rama',
            'nip' => '152018033',
            'password' => bcrypt('123456789'),
            'nidn' => '498277964525429',
            'email' => 'gilang@lppm.itenas.ac.id',
        ]);
        $user3 -> assignRole('pegawai');
    }
}
