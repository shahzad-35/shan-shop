@extends('layout.app')
@section('content')
    <section class="shop_section layout_padding">
        <div class="container">
            <div class="box">
                <div class="detail-box">
                    <h2>
                        SHAN SHOP
                    </h2>
                    <p>
                        There are many variations of passages of Lorem Ipsum available
                    </p>
                </div>
                <div class="img-box">
                    <img src="images/2.jpeg" alt="">
                </div>
                <div class="btn-box">
                    <a href="">
                        Buy Now
                    </a>
                </div>
            </div>
        </div>
    </section>
    <form action="{{ url('add/category') }}" method="post">
      @csrf
        <label for="title">First name:</label><br>
        <input type="text" id="title" name="title"><br>
        <input type="submit" value="Submit">
    </form>

    <section class="about_section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 px-0">
                    <div class="img-box">
                        <img src="images/1.jpeg" alt="">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="detail-box">
                        <div class="heading_container">
                            <hr>
                            <h2>
                                About Our Shop
                            </h2>
                        </div>
                        <p>
                            There are many variations of passages of Lorem Ipsum available, but the majority have suffered
                            alteration in some form, by injected humour
                        </p>
                        <a href="">
                            Read More
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="fruit_section layout_padding">
        <div class="container">
            <div class="heading_container">
                <hr>
                <h2>
                    Huge Range of Products
                </h2>
            </div>
        </div>
        <div class="container-fluid">

            <div class="fruit_container">
                <div class="box">
                    <img src="images/1.jpeg" alt="">
                    <div class="link_box">
                        <h5>
                            Orange
                        </h5>
                        <a href="">
                            Buy Now
                        </a>
                    </div>
                </div>
                <div class="box">
                    <img src="images/2.jpeg" alt="">
                    <div class="link_box">
                        <h5>
                            Blueberry
                        </h5>
                        <a href="">
                            Buy Now
                        </a>
                    </div>
                </div>
                <div class="box">
                    <img src="images/3.jpeg" alt="">
                    <div class="link_box">
                        <h5>
                            Banana
                        </h5>
                        <a href="">
                            Buy Now
                        </a>
                    </div>
                </div>
                <div class="box">
                    <img src="images/4.jpeg" alt="">
                    <div class="link_box">
                        <h5>
                            Apple
                        </h5>
                        <a href="">
                            Buy Now
                        </a>
                    </div>
                </div>
                <div class="box">
                    <img src="images/5.jpeg" alt="">
                    <div class="link_box">
                        <h5>
                            Mango
                        </h5>
                        <a href="">
                            Buy Now
                        </a>
                    </div>
                </div>
                <div class="box">
                    <img src="images/6.jpeg" alt="">
                    <div class="link_box">
                        <h5>
                            Strawberry
                        </h5>
                        <a href="">
                            Buy Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
