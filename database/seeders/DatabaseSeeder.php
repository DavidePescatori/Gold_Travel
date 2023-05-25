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
        $nature = [10, 44, 65, 78, 90, 100, 33, 45, 49, 49,49,49,49,49,49,49,49,49,49,49 ];
        $relax = [3, 11, 65, 78, 90, 55, 33, 45, 49, 88,49,49,49,49,49,49,49,49,49,49 ];
        $history = [100, 11, 65, 78, 90, 100, 33, 45, 49, 49,49,49,49,49,49,49,49,49,49,49 ];
        $culture = [777, 99, 65, 78, 90, 100, 33, 45, 49, 49,49,49,49,49,49,49,49,49,49,49 ];

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
