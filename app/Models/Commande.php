<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;
    protected $table = 'commandes';

    protected $fillable = [
        'date_commande',
        'user_id',
    ];

    protected $primaryKey = 'id';
}
