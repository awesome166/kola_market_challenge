<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class InvoiceResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'invoice_number' => $this->invoice_number,
            'invoice_date' => $this->invoice_date,
            'user_id' => $this->user_id,
            'total_amount' => $this->total_amount,
            'details' => $this->whenLoaded('details', function () {
                return InvoiceDetailResource::collection($this->details);
            }),

        ];
    }
}
