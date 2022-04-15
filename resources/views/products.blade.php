@extends('layout.main')

@section('content')

<!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Menu</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Menu</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Menu Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Menu & Pricing</h4>
                <h1 class="display-4">Competitive Pricing</h1>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="mb-5">Cakes</h1>

                    @foreach($cakes as $cake)
                   
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="{{ asset ('img/'.$cake -> image)}}" alt="">
                            <h5 class="menu-price" style="font-size: 10px; font-weight: bold">৳{{$cake -> price}} </></h5>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4><a href="{{ route('single_product', ['id'=> $cake -> id])}}">{{ $cake -> name}} </a></h4>
                            <p class="m-0">{{$cake -> description}}</p>
                        </div>
                     </div>
                    @endforeach

                    

                </div>
                <div class="col-lg-6">
                    <h1 class="mb-5">Cupcakes</h1>

                    @foreach($cupcakes as $cupcake)
                
                    <div class="row align-items-center mb-5">
                        <div class="col-4 col-sm-3">
                            <img class="w-100 rounded-circle mb-3 mb-sm-0" src="{{ asset ('img/'.$cupcake->image)}}" alt="">
                            <h5 class="menu-price" style="font-size: 10px; font-weight: bold">৳{{$cupcake->price}}</h5>
                        </div>
                        <div class="col-8 col-sm-9">
                            <h4><a href="{{ route('single_product', ['id'=> $cupcake -> id])}}">{{ $cupcake->name }}</a></h4>
                            <p class="m-0">{{$cupcake->description}}</p>
                        </div>
                    </div>

                    @endforeach

                </div>
            </div>
        </div>
    </div>
    <!-- Menu End -->



@endsection