<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    {{--Favicon--}}
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon.ico') }}">

    <title>Laravel - bKash Payment Integration</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-bordered table-sm mt-5">
                <thead class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Product</th>
                    <th scope="col">Currency</th>
                    <th scope="col">Amount</th>
                    <th scope="col">Invoice</th>
                    <th scope="col">Transaction ID</th>
                    <th scope="col">Status</th>
                    <th scope="col" class="text-right">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($payments as $payment)
                    <tr @if($payment->status =='Processing') class="table-success" @endif>
                        <th scope="row">{{ $payment->id }}</th>
                        <td>{{ $payment->product_name }}</td>
                        <td>{{ $payment->currency }}</td>
                        <td>{{ $payment->amount }}</td>
                        <td>{{ $payment->invoice }}</td>
                        <td>{{ $payment->trxID }}</td>
                        <td>{{ $payment->status }}</td>
                        <td class="text-right">
                            <a href="{{ route('payments.show', $payment->id) }}" class="btn btn-sm btn-warning">View</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
