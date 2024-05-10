<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Invoices;
class InvoiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Invoices::create([
            'user_id' => 1, // Assuming user ID 1
            'invoice_number' => 'INV-001',
            'invoice_date' => '2024-05-10',
            'total_amount' => 380.00,
        ]);
        Invoices::create([
            'user_id' => 1, // Assuming user ID 1
            'invoice_number' => 'INV-002',
            'invoice_date' => '2024-05-10',
            'total_amount' => 1220.00,
        ]);
    }
}
