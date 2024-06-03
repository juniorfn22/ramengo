<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProteinSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('proteins')->insert([
            [
                'id' => (string) Str::uuid(),
                'imageInactive' => 'https://tech.redventures.com.br/icons/salt/inactive.svg',
                'imageActive' => 'https://tech.redventures.com.br/icons/salt/active.svg',
                'name' => 'Chicken',
                'description' => 'Grilled chicken breast',
                'price' => 5.00
            ],
            [
                'id' => (string) Str::uuid(),
                'imageInactive' => 'https://tech.redventures.com.br/icons/salt/inactive.svg',
                'imageActive' => 'https://tech.redventures.com.br/icons/salt/active.svg',
                'name' => 'Pork',
                'description' => 'Slow-cooked pork belly',
                'price' => 6.50
            ],
            [
                'id' => (string) Str::uuid(),
                'imageInactive' => 'https://tech.redventures.com.br/icons/salt/inactive.svg',
                'imageActive' => 'https://tech.redventures.com.br/icons/salt/active.svg',
                'name' => 'Tofu',
                'description' => 'Fried tofu cubes',
                'price' => 4.00
            ]
        ]);
    }
}
