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
        $nature =  [65, 55, 90, 60, 40, 35, 35, 45, 35, 40, 90, 45, 40, 40, 70, 60, 90, 90, 85, 40];
        $relax =   [35, 40, 40, 40, 45, 35, 25, 35, 30, 30, 40, 35, 40, 50, 50, 40, 20, 30, 25, 25];
        $history = [35, 45, 30, 40, 35, 45, 75, 30, 35, 30, 30, 45, 45, 25, 50, 40, 25, 35, 35, 30];
        $culture = [45, 45, 35, 35, 45, 35, 70, 40, 45, 35, 35, 55, 50, 25, 55, 45, 30, 30, 40, 25];
                                                                                
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
