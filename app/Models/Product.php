<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\CurrencyRate;

use App\Models\ProductTranslation;


class Product extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'description', 'price'];

    public function getPriceAttribute()
    {
        $currency = session('currency', 'usd');
        $basePrice = $this->attributes['price'];
        $rate = CurrencyRate::where('currency_from', 'usd')
            ->where('currency_to', $currency)
            ->value('rate');
        if (!$rate) {
            return $basePrice; 
        }
        return $basePrice * $rate;
    }

    public function translations()
    {
        return $this->hasMany(ProductTranslation::class, 'product_id');
    }
}
