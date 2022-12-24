@extends('layout.app')
@section('content')

<div class="latest-products">  
    <div class="container">
        <h4>Enter Your Login Credentials</h4>
        <form method ="post" action={{route('login')}} enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">Email</label>
                <input required type="email" name='email' class="form-control" id="name" placeholder="Enter product name">
            </div>


             <div class="form-group">
                <label for="post_image">Password</label>
                <input required type="password" name="password" class="form-control">
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
      </div>
    </div>

@endsection;