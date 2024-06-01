@include('includes.header')
<!-- why section -->
<section class="why_section layout_padding">
   <div class="container">
      <div class="heading_container heading_center">
         <h2>
            {{ __('lang.about_us')}}

         </h2>
      </div>
   </div>
</section>
<!-- end why section -->
<!-- arrival section -->
<section class="arrival_section">
   <div class="container">
      <div class="box">

         <div class="row">
            <p>{{ __('lang.about_us_msg')}}</p>
         </div>
      </div>
   </div>
</section>
<!-- end arrival section -->


@include('includes.footer')
