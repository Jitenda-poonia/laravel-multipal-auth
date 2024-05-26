<?php
namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Notifications\InvoicePaid;


class InvoiceController extends Controller
{
    public function payInvoice($invoiceId)
    {
        $invoice = Invoice::findOrFail($invoiceId);
        $user = $invoice->user;

        // Assume the invoice has been paid
        $user->notify(new InvoicePaid($invoice));

        return view('invoice.paid', compact('invoice'));
    }

    public function showInvoice($invoiceId)
    {
        $invoice = Invoice::findOrFail($invoiceId);
        $user = $invoice->user;

        return view('invoice.show', compact('invoice', 'user'));
    }
}

