@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-9">
            <h2>About Our Application</h2>
            <p class="mt-3 text-muted">
                This application is purpose-built for managing inventory records efficiently. It allows administrators to create, read, update, and delete product listings while providing a robust search functionality to quickly locate specific items within the database.
            </p>
        </div>

        <div class="col-md-3 bg-light p-4 rounded border">
            <h4 class="text-center">IT Support</h4>
            <div class="text-center mt-3">
                <img src="https://cdn-icons-png.flaticon.com/512/3059/3059590.png" alt="Phone Ringing" class="img-fluid mb-3" style="max-height: 80px;">
                <p><strong>Email:</strong></p>
                <p><a href="mailto:support@inventorypro.fake">support@inventorypro.fake</a></p>
            </div>
        </div>
    </div>
@endsection