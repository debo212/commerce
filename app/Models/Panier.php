<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panier extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_user',
        'prixTotal'  
    ];

    public function articlepanier()
    {
        return $this->hasMany(Articlepanier::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
    
}

