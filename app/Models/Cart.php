<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'nft_id', 'units'];

    public function Nft(){
        return $this->belongsTo(Nft::class);
    }

}
