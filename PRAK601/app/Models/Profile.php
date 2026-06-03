<?php

namespace App\Models;

class Profile
{
    public static function getData()
    {
        return [
            'nama' => 'Nazla Salsabila',
            'nim' => '2410817320001',
            'prodi' => 'Teknologi Informasi',
            'hobi' => 'Membuat kue, Menonton Film, Bermain Game Online',
            'skill' => ['Baking', 'Multitasking'],
            'gambar' => 'https://via.placeholder.com/200'
        ];
    }
}