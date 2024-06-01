@include('includes.header')

@php
   $lang = app()->getLocale();
   $currencySymbol = session('currency_symbol', '$');
@endphp
<!-- inner page section -->
<section class="inner_page_head">
   <div class="container_fuild">
      <div class="row">
         <div class="col-md-12">
            <div class="full">

            </div>
         </div>
      </div>
   </div>
</section>
<!-- end inner page section -->
<!-- product section -->
<section class="product_section layout_padding">
   <div class="container">
      <div class="heading_container heading_center">
         <h2>
            <span>{{__('lang.our_products')}}</span>
         </h2>
      </div>
      <div class="row">
         @foreach($products as $product)
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="box">
               <div class="option_container">
                 <div class="options">
                   <a href="{{ url($lang . '/products/' . $product->id) }}" class="option1">
                     {{__('lang.view')}}
                   </a>

                 </div>
               </div>
               <div class="img-box">
                 <img src=" {{ $product->img }}" alt="">
               </div>
               <div class="detail-box">
                 <h5>
                   {{ $product->translated_name }}
                 </h5>
                 <h6>
                   {{ $currencySymbol }} {{ $product->price }}
                 </h6>
               </div>
            </div>
          </div>
       @endforeach
      </div>

   </div>
</section>
<!-- end product section -->



@include('includes.footer')