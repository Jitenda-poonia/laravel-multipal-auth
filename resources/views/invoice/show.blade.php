<!DOCTYPE html>
<html>

<head>
    <title>Invoice Details</title>
</head>

<body>
    <h1>Invoice Details</h1>
    <p>Invoice ID: {{ $invoice->id }}</p>
    <p>Amount: ${{ $invoice->amount }}</p>
    <p>User ID: {{ $invoice->user_id }}</p>
    <p>User Name: {{ $invoice->user->name }}</p>
    <p>User Email: {{ $invoice->user->email }}</p>
</body>

</html>
