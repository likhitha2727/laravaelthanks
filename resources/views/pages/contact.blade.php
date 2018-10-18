@extends('layouts.default')

@section('content')



    <h1>This is a contact page</h1>
    <p class="lead">please use this form to contact site manager.</p>

    <form action="/contact" method="post">
        <div class="form-group">
            <label for="email">Email address</label>
            <input name="email" type="email" class="form-control" id="email" placeholder="name@example.com">
        </div>

        <div class="form-group">
            <label for="body">Message</label>
            <textarea name="body" class="form-control" id="body" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mb-2">Submit</button>
    </form>

@endsection