<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class InvoiceDetailResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'invoice_number' => $this->invoice_number,
            'item' => $this->product->name,
            'quantity' => $this->quantity,
            'unit_price' => $this->unit_price,
            'totalAmount' => $this->unit_price * $this->quantity
        ];
    }


}
