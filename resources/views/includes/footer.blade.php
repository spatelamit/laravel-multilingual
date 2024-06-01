@php
    $lang = app()->getLocale();
@endphp
      <footer>
         <div class="container">
            <div class="row">
               <div class="col-md-4">
                   <div class="full">
                      <div class="logo_footer">
                        <a href="#"><img width="210" src="{{ URL::asset('images/logo.png') }}" alt="#" /></a>
                      </div>
                      <div class="information_f">
                        <p><strong> {{__('lang.address')}}: </strong>{{__('lang.address_value')}}</p>
                        <p><strong>{{__('lang.email')}}</strong> yourmain@gmail.com</p>
                      </div>
                   </div>
               </div>
               <div class="col-md-8">
                  <div class="row">
                  <div class="col-md-7">
                     <div class="row">
                        <div class="col-md-6">
                     <div class="widget_menu">
                        <h3> {{__('lang.menu.menu')}}</h3>
                        <ul>
                           <li><a href="{{ url($lang.'/') }}">{{ __('lang.menu.home')}}</a></li>
                           <li><a href="{{ url($lang.'/about') }}">{{ __('lang.menu.about')}}</a></li>
                           <li><a href="{{ url($lang.'/products') }}">{{ __('lang.menu.products')}}</a></li>
                           <li><a href="{{ url($lang.'/contact') }}">{{ __('lang.menu.contact')}}</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="widget_menu">
                        <h3>{{ __('lang.menu.account')}}</h3>
                        <ul>
                           <li><a href="#">{{ __('lang.menu.account')}}</a></li>
                           <li><a href="#">{{ __('lang.menu.checkout')}}Checkout</a></li>
                           <li><a href="#">{{ __('lang.menu.login')}}</a></li>
                           <li><a href="#">{{ __('lang.menu.register')}}</a></li>
                        </ul>
                     </div>
                  </div>
                     </div>
                  </div>     
                  <div class="col-md-5">
                     <div class="widget_menu">
                        <h3>{{ __('lang.newsletter')}}</h3>
                        <div class="form_sub">
                           <form>
                              <fieldset>
                                 <div class="field">
                                    <input type="email" placeholder="{{ __('lang.newsletter_placeholder')}}" name="email" />
                                    <input type="submit" value="{{ __('lang.newsletter_btn')}}" />
                                 </div>
                              </fieldset>
                           </form>
                        </div>
                     </div>
                  </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- jQery -->
      <script src="{{ URL::asset('js/jquery-3.4.1.min.js'); }}"></script>
      <!-- popper js -->
      <script src="{{ URL::asset('js/popper.min.js'); }}"></script>
      <!-- bootstrap js -->
      <script src="{{ URL::asset('js/bootstrap.js'); }}"></script>
      <!-- custom js -->
      <script src="{{ URL::asset('js/custom.js'); }}"></script>

     
   </body>
</html>