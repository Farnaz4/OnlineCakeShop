@extends('layout.main')

@section('content')


<!-- Menu Start -->
<div class="container-fluid pt-5">
   <div class="container">
      <div class="section-title">
         <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Menu & Pricing</h4>
         <h1 class="display-4">Products</h1>
      </div>
      <div class=" row">
         <div class="col-lg-12">

            @foreach($product_array as $product)

            <div class=" row align-items-center mb-5 text-center">
               <div class="col-12 col-sm-12">
                  <img style="width:200px; height: 200px" class=" rounded-circle mb-3 mb-sm-8" src="{{ asset ('img/'
                  .$product-> image)}}" alt="">
                  <h5 class="menu-price"  style="width: 96px">৳{{$product-> price}}</h5>
               </div>
               <div class="col-12 col-Sm-12 mt-5">
                   <h4>{{$product -> name}}</h4>
                  <p class="m-0">{{$product -> description}}</p>
               </div>
               <form class="mx-auto mt-3" method="POST" action="{{route('add_to_cart')}}" >
                  @csrf
                  <input type="hidden" name="id" value="{{$product->id}}">
                  <input type="hidden" name="name" value="{{$product->name}}">
                  <input type="hidden" name="price" value="{{$product->price}}">
                  <input type="hidden" name="sale_price" value="{{$product->sale_price}}">
                  <input type="hidden" name="quantity" value="1">
                  <input type="hidden" name="image" value="{{$product->image}}">
                  <input type="submit" value="Add to Cart" class="btn btn-warning">
               </form>
            </div>

             @endforeach

            </div>
       </div>
    </div>
</div>

@endsection
<!-- Menu End -> 




