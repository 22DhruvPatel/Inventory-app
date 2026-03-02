@extends('layout')

@section('content')
    <h2>Manage Inventory</h2>
    
    <div class="mb-3">
        <a href="{{ url('/manage?action=create') }}" class="btn btn-primary">Create New Item</a>
    </div>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Name</th>
                <th>Description</th>
                <th>Code</th>
                <th>Price</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($items as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->description }}</td>
                    <td>{{ $item->product_code }}</td>
                    <td>${{ number_format($item->price, 2) }}</td>
                    <td>
                        </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection