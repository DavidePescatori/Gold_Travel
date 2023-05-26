<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $nature = [60, 50, 25, 30, 40, 30, 10, 50, 10, 40, 60, 30, 40, 40, 25, 25, 65, 50, 70, 35];
        $relax = [20, 20, 65, 50, 40, 10, 20, 30, 10, 40, 20, 10, 45, 50, 50, 25, 20, 35, 20, 15];
        $history = [10, 10, 5, 10, 10, 40, 50, 10, 30, 10, 10, 30, 5, 5, 10, 25, 10, 10, 5, 25];
        $culture = [10, 20, 5, 10, 10, 20, 20, 10, 50, 10, 10, 30, 10, 5, 15, 25, 5, 5, 5, 25];

        $i=0;

        foreach(Category::all() as $category){
            $category->nature=$nature[$i];
            $category->relax=$relax[$i];
            $category->history=$history[$i];
            $category->culture=$culture[$i];

            $category->save();

            $i++;
        }
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
