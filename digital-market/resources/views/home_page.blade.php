@extends('user.master')
@section('title')
    Home Page
@endsection
@section('content')
    <!-- fashion section start -->
    <div class="fashion_section">
        <h1>Man & Woman Fashion</h1>
        <div class="fashion_section_cards-div">
            @foreach ($fashions as $fashion)
                <div class="card" style="width: 18rem;">

                    <img src="{{ asset('uploads/products') . '/' . $fashion->image }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $fashion->name }}</h5>
                        <p class="card-text">{{ $fashion->description }}</p>
                        <a href="#" class="btn btn-primary">Purchase</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- fashion section end -->
    <!-- electronic section start -->
    <div class="fashion_section">
        <h1>Electronics</h1>
        <div class="fashion_section_cards-div">
            @foreach ($electronics as $electronic)
                <div class="card" style="width: 18rem;">

                    <img src="{{ asset('uploads/products') . '/' . $electronic->image }}" class="card-img-top"
                        alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $electronic->name }}</h5>
                        <p class="card-text">{{ $electronic->description }}</p>
                        <a href="#" class="btn btn-primary">Purchase</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- electronic section end -->
    <!-- jewellery  section start -->
    <div class="fashion_section">
        <h1>Jewelry</h1>
        <div class="fashion_section_cards-div">
            @foreach ($jewelries as $jewelry)
                <div class="card" style="width: 18rem;">

                    <img src="{{ asset('uploads/products') . '/' . $jewelry->image }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $jewelry->name }}</h5>
                        <p class="card-text">{{ $jewelry->description }}</p>
                        <a href="#" class="btn btn-primary">Purchase</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- jewellery  section end -->
@endsection
