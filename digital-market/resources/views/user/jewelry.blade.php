@extends('user.master')
@section('title')
    Jewelry
@endsection
@section('content')
    <!-- jewellery  section start -->
    <div class="fashion_section">
        <h1>Jewelry</h1>
        <div class="fashion_section_cards-div">
        @foreach ($products as $product)
            <div class="card" style="width: 18rem;">

                <img src="{{ asset('uploads/products') . '/' . $product->image }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">{{ $product->description }}</p>
                    <a href="#" class="btn btn-primary">Purchase</a>
                </div>
            </div>
        @endforeach
        </div>
        {{-- <div id="jewellery_main_slider" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <h1 class="fashion_taital">Jewellery Accessories</h1>
                        <div class="fashion_section_2">
                            <div class="row">
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Jumkas</h4>
                                        <p class="price_text">Start Price <span style="color: #262626;">$ 100</span></p>
                                        <div class="jewellery_img"><img src="{{ asset('images/jhumka-img.png') }}"></div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Buy Now</a></div>
                                            <div class="seemore_bt"><a href="#">See More</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Necklaces</h4>
                                        <p class="price_text">Start Price <span style="color: #262626;">$ 100</span></p>
                                        <div class="jewellery_img"><img src="{{ asset('images/neklesh-img.png') }}"></div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Buy Now</a></div>
                                            <div class="seemore_bt"><a href="#">See More</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Kangans</h4>
                                        <p class="price_text">Start Price <span style="color: #262626;">$ 100</span></p>
                                        <div class="jewellery_img"><img src="{{ asset('images/kangan-img.png') }}"></div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Buy Now</a></div>
                                            <div class="seemore_bt"><a href="#">See More</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <h1 class="fashion_taital">Jewellery Accessories</h1>
                        <div class="fashion_section_2">
                            <div class="row">
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Jumkas</h4>
                                        <p class="price_text">Start Price <span style="color: #262626;">$ 100</span></p>
                                        <div class="jewellery_img"><img src="{{ asset('images/jhumka-img.png') }}"></div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Buy Now</a></div>
                                            <div class="seemore_bt"><a href="#">See More</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Necklaces</h4>
                                        <p class="price_text">Start Price <span style="color: #262626;">$ 100</span></p>
                                        <div class="jewellery_img"><img src="{{ asset('images/neklesh-img.png') }}"></div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Buy Now</a></div>
                                            <div class="seemore_bt"><a href="#">See More</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Kangans</h4>
                                        <p class="price_text">Start Price <span style="color: #262626;">$ 100</span></p>
                                        <div class="jewellery_img"><img src="{{ asset('images/kangan-img.png') }}"></div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Buy Now</a></div>
                                            <div class="seemore_bt"><a href="#">See More</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <h1 class="fashion_taital">Jewellery Accessories</h1>
                        <div class="fashion_section_2">
                            <div class="row">
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Jumkas</h4>
                                        <p class="price_text">Start Price <span style="color: #262626;">$ 100</span></p>
                                        <div class="jewellery_img"><img src="{{ asset('images/jhumka-img.png') }}"></div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Buy Now</a></div>
                                            <div class="seemore_bt"><a href="#">See More</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Necklaces</h4>
                                        <p class="price_text">Start Price <span style="color: #262626;">$ 100</span></p>
                                        <div class="jewellery_img"><img src="{{ asset('images/neklesh-img.png') }}"></div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Buy Now</a></div>
                                            <div class="seemore_bt"><a href="#">See More</a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-4">
                                    <div class="box_main">
                                        <h4 class="shirt_text">Kangans</h4>
                                        <p class="price_text">Start Price <span style="color: #262626;">$ 100</span></p>
                                        <div class="jewellery_img"><img src="{{ asset('images/kangan-img.png') }}"></div>
                                        <div class="btn_main">
                                            <div class="buy_bt"><a href="#">Buy Now</a></div>
                                            <div class="seemore_bt"><a href="#">See More</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#jewellery_main_slider" role="button" data-slide="prev">
                <i class="fa fa-angle-left"></i>
            </a>
            <a class="carousel-control-next" href="#jewellery_main_slider" role="button" data-slide="next">
                <i class="fa fa-angle-right"></i>
            </a>
            <div class="loader_main">
                <div class="loader"></div>
            </div>
        </div> --}}
    </div>
    <!-- jewellery  section end -->
@endsection
