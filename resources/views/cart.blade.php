<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/products.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Shopping Cart</title>
</head>
<body>
@if (Session::has('cart'))
    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">Quantity</th>
            <th scope="col">Name</th>
            <th scope="col">Price</th>
            <th scope="col">Action</th>
        </tr>
        </thead>

        <tbody>
        <tr>
        @foreach(App\Models\Product::all() as $product) 
                <th scope="row">{{ $product['qty'] }}</th>
                <td><strong>{{ $product->title }}</strong></td>
                <td><span class="label label-succes">€{{ $product['price'] }}</span></td>
                <td>
                    <div class="btn-group">
                        <button type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                            Action
                        </button>
                       
                    </div>
                </td>
        </tr>
        </tbody>
        @endforeach
    </table>


    <div class="row">
        <div class="col-sm6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <strong>Total: €{{ $totalPrice }}</strong>
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-sm6 col-md-6 col-md-offset-3 col-sm-offset-3">
            
        </div>
    </div>
@else
    <div class="row">
        <div class="col-sm6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <h3>There are no items in the Cart!</h3>
        </div>
    </div>
@endif

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"