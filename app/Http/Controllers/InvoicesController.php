<?php

namespace App\Http\Controllers;

use App\Models\invoices;
use Illuminate\Http\Request;
use App\Http\Resources\InvoiceResource;

class InvoicesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return response()->json(['data' => InvoiceResource::collection(invoices::with('details')->get())]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
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
    public function show(invoices $invoice)
    {
        return response()->json(['data' =>   InvoiceResource::collection(invoices::where('id', $invoice->id)->with('details')->get()) ]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(invoices $invoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, invoices $invoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(invoices $invoice)
    {
        //
    }
}
