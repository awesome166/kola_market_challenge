<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\invoice_items;
class InvoiceDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        invoice_items::create([
            'invoices_id' => 1,
            'product_id' => '2',
            'unit_price' => 90.00,
            'quantity' => 2,
        ]);
        invoice_items::create([
            'invoices_id' => 1,
            'product_id' => '3',
            'unit_price' => 50.00,
            'quantity' => 2,
        ]);
        invoice_items::create([
            'invoices_id' => 1,
            'product_id' => '3',
            'unit_price' => 50.00,
            'quantity' => 2,
        ]);
        invoice_items::create([
            'invoices_id' => 2,
            'product_id' => '3',
            'unit_price' => 50.00,
            'quantity' => 2,
        ]);
        invoice_items::create([
            'invoices_id' => 2,
            'product_id' => '3',
            'unit_price' => 540.00,
            'quantity' => 2,
        ]);
        invoice_items::create([
            'invoices_id' => 2,
            'product_id' => '3',
            'unit_price' => 20.00,
            'quantity' => 2,
        ]);
    }
}
