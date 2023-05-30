<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Service;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
    * Seed the application's database.
    */
    public function run(): void
    {
        $nature =  [62, 54, 87, 58, 40, 38, 36, 47, 33, 38, 88, 43, 39, 40, 68, 61, 88, 89, 82, 41];
        $relax =   [34, 38, 38, 41, 43, 32, 27, 34, 28, 30, 38, 37, 41, 50, 50, 38, 20, 27, 25, 22];
        $history = [33, 44, 28, 39, 36, 41, 73, 28, 34, 29, 29, 41, 44, 25, 49, 41, 23, 33, 34, 30];
        $culture = [43, 42, 35, 37, 42, 34, 68, 37, 45, 33, 32, 51, 50, 22, 56, 44, 29, 28, 36, 25];
        
        $i=0;
        
        $services_en=[   
            
            'B&B',
            
            'Smoking area',
            
            'prepayment',
            
            'Half board',
            
            'Room cleaning',
            
            'Room service',
            
            'Parking',
            
            'Pets allowed',
            
            'Wi-fi',
            
            'Free Cancellation'];
            
            $services_es= [
                
                
                'B&B',
                
                'Zona de fumadores',
                
                'prepago',
                
                'Media pensión',
                
                'Limpieza de habitaciones',
                
                'Servicio de habitaciones',
                
                'Aparcamiento',
                
                'Se admiten animales',
                
                'Wi-fi',
                
                'Cancelación gratuita',
                
            ];
            
            $x = 0;
            $z = 0;

            foreach (Service::all() as $service) {
               
                $service->en = $services_en[$x];
                $service->save();
                $x++;
            }

            foreach (Service::all() as $service) {
               
                $service->es = $services_es[$z];
                $service->save();
                $z++;
            }
            
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
        