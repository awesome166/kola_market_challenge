<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class invoice_items extends Model
{
    use HasFactory;


    public function invoice()
    {
        return $this->belongs(invoice::class);
    }


    public function product()
    {
        return $this->belongsTo(product::class);
    }

}
