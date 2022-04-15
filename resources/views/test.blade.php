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
      <th>header1</th>
      <th>header2</th>
      <th>header3</th>
    </tr>
   </thead>
   <tbody>
     <tr>
       <td>text1.1</td>
       <td>text1.2</td>
       <td>text1.3</td>
     </tr>
     <tr>
       <td>text2.1</td>
       <td>text2.2</td>
       <td>text2.3</td>
     </tr>
     <tr>
       <td>text3.1</td>
       <td>text3.2</td>
       <td>text3.3</td>
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