<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contenirs extends Model
{
    use HasFactory;
    
    protected $table = 'contenirs';

    protected $fillable = [
        'commande',
        'produit',
        'quantity',
        'price_commande',
    ];

    protected $primaryKey = 'id';
}
