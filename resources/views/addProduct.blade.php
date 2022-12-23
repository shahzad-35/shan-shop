@extends('layout.app')
@section('content')

<div class="latest-products">
      <div class="container">
        <form method="post" action="{{route('add-category')}}">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name='name' class="form-control" id="name" placeholder="Enter product name">
            </div>

            <div class="form-group">
                <label for="category_id">Category name</label>
                <select name='category_id' class="form-control">
                    <option>A</option>
                    <option>B</option>
                </select>
            </div>

             <div class="form-group">
                <label for="post_image">Category name</label>
                <input type="file" name="post_image" class="form-control-file">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>

@endsection