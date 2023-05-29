<?php

use App\Models\Service;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        $services = [

            'B&B',
            'Area fumatori',
            'pagamento anticipato',
            'Mezza pensione',
            'Pulizia della stanza',
            'Servizio in camera',
            'Parcheggio',
            'Animali ammessi',
            'Wi-fi',
            'Cancellazione Gratuita',

            
        ];

        foreach($services as $service){

            Service::create(['name'=>$service]);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
