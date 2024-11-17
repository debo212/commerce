<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Articlepanier extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_panier',
        'id_produit',
        'quantite',
        'prixTotal'
    ];

    public function produit()
    {
        return $this->belongsTo(Produit::class, 'id_produit');
    }
    public function panier()
    {
        return $this->belongsTo(Panier::class, 'id_panier');
    }
}
