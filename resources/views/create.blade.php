@extends('layouts.app')

@section('content')
    <div class="container">

    <form action="{{ route('store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name" aria-describedby="nameHelp">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">eMail</label>
            <input type="email" class="form-control" name="email" id="email">
        </div>
        <div class="mb-3">
            <label for="phone_type" class="form-label">Phone Type</label>
            <input type="text" class="form-control" name="phone_type" id="phone_type">
        </div>
        <div class="mb-3">
            <label for="number" class="form-label">Phone Number</label>
            <input type="tel" class="form-control" name="number" id="number">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>

@endsection
