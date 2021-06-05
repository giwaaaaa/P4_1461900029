<?php

namespace Database\Seeders;

use App\Models\Pelanggan;
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
        $pelanggan1 = new Pelanggan();
        $pelanggan1->nama = "Giwa";
        $pelanggan1->alamat = "Lakarsantri";
        $pelanggan1->save();

        $pelanggan2 = new Pelanggan();
        $pelanggan2->nama = "Ferari";
        $pelanggan2->alamat = "Surabaya";
        $pelanggan2->save();
    }
}
