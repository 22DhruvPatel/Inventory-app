@extends('layout')

@section('content')
    <h2>Manage Inventory</h2>
    
    <div class="mb-3">
        <a href="{{ url('/manage?action=create') }}" class="btn btn-primary">Create New Item</a>
    </div>

    @if(request('action') == 'create')
        <div class="card mb-4 p-3 border-primary">
            <h4>Add New Item</h4>
            <form action="{{ url('/manage') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-3">
                        <input type="text" name="name" class="form-control" placeholder="Item Name" required>
                    </div>
                    <div class="col-md-4">
                        <input type="text" name="description" class="form-control" placeholder="Description" required>
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="product_code" class="form-control" placeholder="Code" required>
                    </div>
                    <div class="col-md-2">
                        <input type="number" step="0.01" name="price" class="form-control" placeholder="Price" required>
                    </div>
                    <div class="col-md-1">
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </div>
            </form>
        </div>
    @endif

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
                        <form action="{{ url('/manage/'.$item->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger text-white" onclick="return confirm('Are you sure you want to delete this item?');">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection