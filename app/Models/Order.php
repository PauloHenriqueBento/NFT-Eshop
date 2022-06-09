<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'address', 'city', 'state', 'zipcode', 'nft_id', 'name', 'price', 'units'];

    public function Nfts()
    {
        return $this->belongsToMany(Nft::class)->withPivot('name','price','units');
    }
}
