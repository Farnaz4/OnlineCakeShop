<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\CartController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ProjectController::class,'index']);


Route:: get('/home',function(){

    return view('index');
    
    });
Route:: get('/testimonial',function(){

        return view('layout.testimonial');
        
        });
    
Route:: get('/about',function(){

            return view('layout.about');
            
            });
        
 Route:: get('/login',function(){

                return view('layout.login');
                
                });
            
 Route:: get('/contact',function(){

                    return view('layout.contact');
                    
                    });
                
Route:: get('/single_product',function(){

return view('single_products');

});

Route:: get('/products',[ProjectController::class,'products'])->name('products');


Route:: get('/about',function(){

    return view('about');
    
    });




   
    
    Route::get('/uploadfile', 'App\Http\Controllers\UploadfileController@index');
    Route::post('/uploadfile', 'App\Http\Controllers\UploadfileController@upload');
    Route::get('/main', 'App\Http\Controllers\MainController@index');
    Route::post('/main/checklogin', 'App\Http\Controllers\MainController@checklogin');
    Route::get('main/successlogin', 'App\Http\Controllers\MainController@successlogin');
    Route::get('main/logout', 'App\Http\Controllers\MainController@logout');




    
Route:: get('/single_product/{id}', [ProjectController::class, 'single_product'])->name('single_product');  

Route:: get('/cart', [CartController::class, 'cart'])->name('cart'); 



Route::post('/add_to_cart', [CartController::class, 'add_to_cart' ])-> name('add_to_cart');
Route:: get('/add_to_cart', function(){

    return redirect('/');

});


Route::post('/remove_from_cart', [CartController::class, 'remove_from_cart' ])-> name('remove_from_cart');
Route:: get('/remove_from_cart', function(){

    return redirect('/');

});


Route::post('/edit_product_quantity', [CartController::class, 'edit_product_quantity' ])-> name('edit_product_quantity');
Route:: get('/edit_product_quantity', function(){

    return redirect('/');

});


Route::post('/checkout', [CartController::class, 'checkout' ])-> name('checkout');
