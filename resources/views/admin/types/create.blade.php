@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Add a new Type</h1>

        <form action="{{ route('admin.types.store') }}" method="POST">
            @csrf

            <div class="mb-3 mt-3">
                <label for="title" class="form-label">Type Name</label>
                <input type="text" class="form-control" id="title" name="name">
            </div>

            <label for="color">Color Type</label>
            <select id="color" class="form-select" name="color">
                <option selected>Open this select menu</option>
                <option value="#db6a00">Orange</option>
                <option value="#03cb00">Green</option>
                <option value="#03027f">Blue</option>
            </select>

            <button type="submit" class="btn btn-primary mt-3">Save</button>

        </form>
    </div>
@endsection
