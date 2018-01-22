<?php

use Illuminate\Database\Seeder;

class record extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $a = [
            ['Nama'=>'Asep Saepul', 'Kelas'=>'XI RPL 2', 'Jurusan'=>'RPL'],
        	['Nama'=>'Yayan nana', 'Kelas'=>'XI RPL 2', 'Jurusan'=>'RPL',],
        	['Nama'=>'Rizal setiadi', 'Kelas'=>'XI RPL 2', 'Jurusan'=>'RPL'],
        	['Nama'=>'Nanang Kosim', 'Kelas'=>'XI RPL 2', 'Jurusan'=>'RPL'],
        	['Nama'=>'Ade Hermawan', 'Kelas'=>'XI RPL 2', 'Jurusan'=>'RPL'],
        	


        ];
        DB::table('Tugas')->insert($a);
    }
}
