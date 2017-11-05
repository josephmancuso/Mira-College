@extends('layouts.base')

@section('content')

<!-- if there are login errors, show them here -->
<p>
    {{ $errors->first('email') }}
    {{ $errors->first('password') }}
</p>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-4 col-md-offset-4"
        <form action="" method="POST">
            <div class="form-group">
                <label>Username:</label>
                <input type="text" class="form-control" name="username">
            </div>
        </form>
    </div>
</div>

@endsection