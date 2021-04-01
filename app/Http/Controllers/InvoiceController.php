<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use Illuminate\Http\Request;
use \PDF;

class InvoiceController extends Controller
{
    public function index()
    {   
        $invoices = Invoice::all();
        return view('admin.user-management.user.index', compact('invoices'));
    }

    public function create()
    {
        return view('admin.user-management.user.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'customer_name' => 'required|max:255',
            'address' => 'required|max:255',
            'item' => 'required|max:255',
            'date' => 'required|max:255',
            'quantity' => 'required',
            'issued_by' => 'required',
        ]);
        Invoice::create($validatedData);
        return redirect('/')->with('success', 'Invoice is successfully saved');
    }

    public function downloadPDF($id) {
        $show = Invoice::find($id);
        $pdf = PDF::loadView('admin.user-management.user.pdf', compact('show'));
        return $pdf->download('invoice.pdf');
    }

    public function show(Invoice $invoice)
    {
        //
    }

    public function edit(Invoice $invoice)
    {
        //
    }

    public function update(Request $request, Invoice $invoice)
    {
        //
    }

    public function destroy(Invoice $invoice)
    {
        //
    }
}
