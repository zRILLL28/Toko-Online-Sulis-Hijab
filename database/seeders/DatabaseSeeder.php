<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Merk;
use App\Models\Product;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        collect(array(
            [
                'name' => 'Administrator',
                'email' => 'admin@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('admin123'),
                'image' => '',
                'address' => 'Indonesia',
                'phone' => '+62 8722 3323 334',
                'role' => 'admin'
            ],
            [
                'name' => 'Customer',
                'email' => 'customer@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('customer123'),
                'image' => '',
                'address' => 'Indonesia',
                'phone' => '+62 8222 3333 334',
                'role' => 'customer'
            ],
            [
                'name' => 'Operator',
                'email' => 'operator@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('operator123'),
                'image' => '',
                'address' => 'Indonesia',
                'phone' => '+62 8222 3333 334',
                'role' => 'operator'
            ],
        ))->each(function ($users) {
            User::create($users);
        });

        $merk = array(
            [
                'merk' => 'Rabbani',
                'description' => 'Merk jilbab yang satu ini sudah tersebar di berbagai pelosok daerah di Indonesia. Berpusat di Bandung, Rabbani menawarkan busana muslim tidak hanya untuk perempuan dan pria, tapi juga tersedia untuk anak kecil.',
                'image' => 'merk_image/rabbanilogo.png'
            ],
            [
                'merk' => 'Elzatta',
                'description' => 'Elzatta, merk hijab yang baru berkembang sejak tahun 2012 ini banyak digemari karena bahannya yang lembut, adem dan nyaman dikenakan. Karena kebanyakan bahannya diimpor langsung dari Turki, jilbab Elzatta disebut memiliki kualitas yang premium untuk harganya yang cukup terjangkau.',
                'image' => 'merk_image/elzattalogo.png'
            ],
            [
                'merk' => 'Zoya',
                'description' => 'Sama seperti Rabbani, merk hijab Zoya juga akrab di kalangan hijabers pencinta gaya simpel. Zoya menyediakan koleksi jilbab, bergo, rok panjang, baju muslim sampai dengan scarf atau selendang hijab.',
                'image' => 'merk_image/zoyalogo.png'
            ]
        );
        foreach ($merk as $m) {
            Merk::create($m);
        }
        Product::factory(100)->create();
    }
}
