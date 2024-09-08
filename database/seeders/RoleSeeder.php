<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Media;
use App\Models\Product;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::truncate();
        Product::truncate();
        Role::create([
            'name' => 'admin'
        ]);
        Role::create([
            'name' => 'team_member'
        ]);

        Category::updateOrCreate(
            ['name' => 'Program'],
            [
                'name' => 'Program',
                'slug' => 'program',
                'status' => 1]
        );
        Category::updateOrCreate(
            ['name' => 'Personal Program'],
            [
                'name' => 'Personal Program',
                'slug' => 'Personal_Program',
                'status' => 1]
        );
        Category::updateOrCreate(
            ['name' => 'Monthly Subscription'],
            [
                'name' => 'Monthly Subscription',
                'slug' => 'monthly_subscription',
                'status' => 1]
        );

        Product::truncate();

        Product::create([
            'category_slug' => 'program',
            'title' => 'Fat Loss Extreme For Him',
            'name' => 'Weight Loss Program For Him',
            'description' => 'DID SCIENTISTS JUST UNCOVER THE KEY TO UNLOCKING 780 UNIQUE FAT BURNING GENES INSIDE YOUR BODY ALL AT ONCE?',
            'price' => 30,
            'status' => 1,
        ]);
        Product::create([
            'category_slug' => 'program',
            'title' => 'Fat Loss Extreme For Her',
            'name' => 'Weight Loss Program for Her',
            'description' => 'DID SCIENTISTS JUST UNCOVER THE KEY TO UNLOCKING 780 UNIQUE FAT BURNING GENES INSIDE YOUR BODY ALL AT ONCE?',
            'price' => 20,
            'status' => 1,
        ]);


        Product::create([
            'category_slug' => 'program',
            'title' => 'Fat Gain Extreme at Home',
            'name' => 'Weight Gain Program at home',
            'description' => 'DID SCIENTISTS JUST UNCOVER THE KEY TO UNLOCKING 780 UNIQUE FAT BURNING GENES INSIDE YOUR BODY ALL AT ONCE?',
            'price' => 30,
            'status' => 1,
        ]);

        Product::create([
            'category_slug' => 'program',
            'title' => 'Fat Loss Extreme at Gym',
            'name' => 'Weight Loss Program at Gym',
            'description' => 'DID SCIENTISTS JUST UNCOVER THE KEY TO UNLOCKING 780 UNIQUE FAT BURNING GENES INSIDE YOUR BODY ALL AT ONCE?',
            'price' => 30,
            'status' => 1,
        ]);



        Product::create([
            'category_slug' => 'monthly_subscription',
            'title' => 'Weight Loss Monthly Plan',
            'name' => 'Weight Loss Plan',
            'description' => 'Discover Our Science-Based Shortcut That Can Get You CRAZY Results in the Next 90 Days',
            'price' => 45,
            'status' => 1,
        ]);

        Product::create([
            'category_slug' => 'monthly_subscription',
            'title' => 'Weight Gain Monthly Plan',
            'name' => 'Weight Gain Plan',
            'description' => 'Discover Our Science-Based Shortcut That Can Get You CRAZY Results in the Next 90 Days',
            'price' => 30,
            'status' => 1,
        ]);

        Product::create([
            'category_slug' => 'monthly_subscription',
            'title' => 'Weight Gain Monthly Plan at Home',
            'name' => 'Weight Gain Plan at Home',
            'description' => 'Discover Our Science-Based Shortcut That Can Get You CRAZY Results in the Next 90 Days',
            'price' => 30,
            'status' => 1,
        ]);

        Product::create([
            'category_slug' => 'monthly_subscription',
            'title' => 'Weight Loss Monthly Plan at Gym',
            'name' => 'Weight Loss Plan at Gym',
            'description' => 'Discover Our Science-Based Shortcut That Can Get You CRAZY Results in the Next 90 Days',
            'price' => 30,
            'status' => 1,
        ]);

        $products = Product::all();

        foreach ($products as $product){

            $media  =   new Media();
            $media->image = 'gym_image.jpg';
            $media->product_id = $product->id;
            $media->file = 'gym.pdf';

        }

    }
}
