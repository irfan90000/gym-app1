<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Category::updateOrCreate(
            ['name' => 'Program'],
            ['name' => 'Program', 'status' => 1]
        );
        Category::updateOrCreate(
            ['name' => 'Personal Program'],
            ['name' => 'Personal Program', 'status' => 1]
        );
        Category::updateOrCreate(
            ['name' => 'Monthly Subscription'],
            ['name' => 'Monthly Subscription', 'status' => 1]
        );

    }
}
