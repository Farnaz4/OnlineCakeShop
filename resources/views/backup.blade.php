<!-- backup code v1 -->
@if(Session:: has('cart'))
             @foreach(Session::get('cart') as $product)

                <tr>
                     <td>
                         <div class="product-info">
                             <img src="{{ asset ('img/' .$product['image'])}}">
                             
                             <div>
                                  <p>{{$product['name']}}</p>
                                  <small><span>$</span>{{ $product ['price']}}</small>
                                  <br>
                                  <form>
                                      <input type="hidden" name="id" value="1">
                                      <input type="submit" name="remove_btn" class="remove-btn"
                                        value=" remove">
                                  </form>
                             </div>
                         </div>
                     </td>

                     <td>
                        <form>
                           <input type="number" name="quantity" value="{{$product ['quality']}}">
                           <input type="submit" value="edit" class="edit-btn" name="
                           edit product_quantity_btn">
                         </form>
                     </td>


                     <td>
                           <span class="product-price">${{ $product['price'] * $product['quality']}}</span>
                    </td>
                 </tr>

                 @endforeach
                 @endif

        </table>

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