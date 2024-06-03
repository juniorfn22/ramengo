<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BrothSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('broths')->insert([
            [
                'id' => (string) Str::uuid(),
                'imageInactive' => 'https://tech.redventures.com.br/icons/salt/inactive.svg',
                'imageActive' => 'https://tech.redventures.com.br/icons/salt/active.svg',
                'name' => 'Shoyu',
                'description' => 'Soy sauce based broth',
                'price' => 10.00
            ],
            [
                'id' => (string) Str::uuid(),
                'imageInactive' => 'https://tech.redventures.com.br/icons/salt/inactive.svg',
                'imageActive' => 'https://tech.redventures.com.br/icons/salt/active.svg',
                'name' => 'Miso',
                'description' => 'Miso based broth',
                'price' => 12.00
            ],
            [
                'id' => (string) Str::uuid(),
                'imageInactive' => 'https://tech.redventures.com.br/icons/salt/inactive.svg',
                'imageActive' => 'https://tech.redventures.com.br/icons/salt/active.svg',
                'name' => 'Shio',
                'description' => 'Salt based broth',
                'price' => 11.00
            ]
        ]);
    }
}
