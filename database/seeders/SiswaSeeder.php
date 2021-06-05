<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Seeder;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswa1 = new Siswa();
        $siswa1->nama_siswa = "Giwa";
        $siswa1->alamat = "Lakarsantri";
        $siswa1->save();

        $siswa2 = new Siswa();
        $siswa2->nama_siswa = "Ferari";
        $siswa2->alamat = "Surabaya";
        $siswa2->save();
    }
}
