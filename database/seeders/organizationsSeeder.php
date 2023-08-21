<?php

namespace Database\Seeders;

use App\Models\organization;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class organizationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        organization::insert([
            [
                'name' => 'Facebook'
            ], [
                'name' => 'Google Ads',
            ], [
                'name' => 'Auto Ads',
            ], [
                'name' => 'FM Ads',
            ], [
                'name' => 'Refrence',
            ],
        ]);
    }
}
