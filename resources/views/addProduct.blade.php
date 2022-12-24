@extends('layout.app')
@section('content')

<div class="latest-products">  
    <div class="container">
        <form method ="post" action={{route('add-product')}} enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input required type="text" name='name' class="form-control" id="name" placeholder="Enter product name">
            </div>

            <div class="form-group">
                <label for="category_id">Category name</label>
                <select required name='category_id' class="form-control">
                    @foreach($categories as $cate)
                        <option value={{$cate['id']}}>{{$cate['title']}}</option>
                    @endforeach
                </select>
            </div>

             <div class="form-group">
                <label for="post_image">Category name</label>
                <input required type="file" name="post_image" class="form-control-file">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      
      @if($errors->any())
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
      @endif
    </div>

@endsection