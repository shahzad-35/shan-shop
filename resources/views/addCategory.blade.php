@extends('layout.app')
@section('content')

<div class="latest-products">
      <div class="container">
        <form method="post" action="{{route('add-category')}}">
            @csrf
            <div class="form-group">
                <label for="title">Category name</label>
                <input type="text" name='title' class="form-control" id="title" placeholder="Enter category name">
                <small id="title" class="form-text text-muted">Make sure to select category name</small>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>

@endsection