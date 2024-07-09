<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;
use SebastianBergmann\CodeCoverage\Report\Xml\Project;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Product::factory(4)
            ->hasVariants(5)
            ->has(
                Image::factory(3)
                    ->state(new Sequence(
                        fn (Sequence $sequence) => ['featured' => $sequence->index === 0]
                    ))
            )
            ->create();

        User::factory()->create([
            'email' => 'rui@dudev.pt'
        ]);
    }
}
