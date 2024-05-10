<?php

namespace App\Http\Controllers;

use App\Models\invoice_items;
use Illuminate\Http\Request;
use App\Http\Resources\InvoiceDetailResource;

class InvoiceItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(invoice_items $invoice_items)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(invoice_items $invoice_items)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, invoice_items $invoice_items)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(invoice_items $invoice_items)
    {
        //
    }
}
