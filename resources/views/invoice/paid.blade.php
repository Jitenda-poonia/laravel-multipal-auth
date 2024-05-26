<!-- resources/views/invoice/paid.blade.php -->

<!DOCTYPE html>
<html>

<head>
    <title>Invoice Paid</title>
</head>

<body>
    <h1>Invoice Paid</h1>
    <p>Invoice #{{ $invoice->id }} for ${{ $invoice->amount }} has been paid.</p>
    <p><a href="{{ route('invoices.show', $invoice->id) }}">View Invoice</a></p>
</body>

</html>
