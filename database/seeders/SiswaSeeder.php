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
        $siswa1->nama = "Giwa";
        $siswa1->alamat = "Lakarsantri";
        $siswa1->save();

        $pelanggan2 = new Pelanggan();
        $pelanggan2->nama = "Ferari";
        $pelanggan2->alamat = "Surabaya";
        $pelanggan2->save();
    }
}
