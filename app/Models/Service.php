<?php

namespace App\Models;

use App\Models\Article;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function getIconAttribute()
    {
        switch ($this->name) {
            case 'B&B':
                return 'fa-bed';

            case 'Area fumatori':
                return 'fa-smoking';
           
            case 'Pagamento anticipato':
                return 'fa-credit-card';

            case 'Mezza pensione':
                return 'fa-utensils';

            case 'Pulizia della stanza':
                return 'fa-broom';

            case 'Servizio in camera':
                return 'fa-concierge-bell';

            case 'Parcheggio':
                return 'fa-parking';

            case 'Animali ammessi':
                return 'fa-paw';

            case 'Wi-fi':
                return 'fa-wifi';

            case 'Cancellazione Gratuita':
                return 'fa-calendar-times';

            default:
                return 'fa-question-circle'; // Icona di default per servizi sconosciuti
        }
    }

    public function articles(){

        return $this->belongsToMany(Article::class);
    }
}
