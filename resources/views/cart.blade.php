@extends ('layout.main')
@section('content')

<!-- <Page Header Start> -->
     <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-cenrer pt-0 pt-lg-5" style="min-height: 400px">
        <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase"> Cart</h1>
           <div class= "d-inline-flex mb-lg-5">
               <p class="m-0 text-white"><a class="text-white" href="">Home</a></p>
               <p class="m-0 text-white" px-2></p>
               <p class="m-0 text-white">/ Cart</p>
            </div>
       </div>
     </div>       



<!-- created by me -->
@extends ('layout.main')
@section('content')
<section class="cart container mt-2 my-3 py-5">
    <div class="container mt-2">
        
        <h4>Your Cart</h4>
        
    </div>
    <table>
    <thead>
    <tr>
      <th>Product</th>
      <th>Name</th>
      <th>Quantity</th>
      <th>Price</th>
    </tr>
   </thead>
   <tbody>
     <tr>
       <td><img class="w-50 rounded-circle mb-3 mb-sm-0" src="{{ asset ('img/chocolate-cake.jpg')}}" alt=""></td>
       <td>Moist Chocolate Cake</td>
       <td>- 1 +</td>
       <td>1300</td>
     </tr>
     
     <tr>
       <td> </td>
       <td> </td>
       <td> </td>
       <td> --------------------------</td>
     </tr>
     <tr>
       <td> </td>
       <td> </td>
       <td> </td>
       <td> Total  =  1300 </td>
     </tr>
     <tr>
     </tr>
  </tbody>
</table>
<!-- 
        <div class="cart-total">
            <table>
               @if(Session::has('cart'))
                  <tr>
                    <td>Total</td>
                 
                        @if(Session::has('total'))
                         <td>${{Session::has('total')}}</td>
                        @endif             
                    </tr>
                @endif    
             </table>
          </div>
        
-->
<div class="checkout-container">
   <form>
      <input type="submit" class="btn checkout-btn" value="Checkout" name="">
   </form>
</div>
</section>



@endsection