@include('includes.header')
@php
   $lang = app()->getLocale();
   $currencySymbol = session('currency_symbol', '$');
@endphp

<section class="product_section layout_padding">
   <div class="container">
      <div class="heading_container heading_center">
      </div>
      <div class="row">
         <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="box">

               <div class="img-box">
                  <img src="{{ $product->img }}" alt="">
               </div>
               <div class="detail-box">
                  <h5>
                     {{ $product->translations->first()->name }}
                  </h5>
                  <h6>
                     {{ $currencySymbol }}{{ $product->price }}
                  </h6>

               </div>
            </div>
         </div>
         <form action="{{ url($lang . '/cart/add') }}" method="post">
            @csrf
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <input type="number" name="quantity" value="1" min="1">
            <button type="submit">{{__('lang.add_to_cart')}}</button>
         </form><br>
         <div class="col-sm-12 col-md-12 ">

            <p>
               {{ $product->translations->first()->description }}
            </p>

         </div>

      </div>
   </div>
</section>




@include('includes.footer')