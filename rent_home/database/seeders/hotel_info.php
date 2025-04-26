<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class hotel_info extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => 'Le Nhat Link',
            'phone' => '0987654321',
            'check_in' => '2023-04-26',
            'note' => 'test',
            'pay_method' => '0',
        ]);
    }
}
