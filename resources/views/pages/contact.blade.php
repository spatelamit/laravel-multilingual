@include('includes.header')


     <section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>{{__('lang.contact_us')}}</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end inner page section -->
      <!-- why section -->
      <section class="why_section layout_padding">
         <div class="container">
         
            <div class="row">
               <div class="col-lg-8 offset-lg-2">
                  <div class="full">
                     <form action="index.html">
                        <fieldset>
                           <input type="text" placeholder="{{__('lang.enter_name')}}" name="name" required />
                           <input type="email" placeholder="{{__('lang.enter_email')}}" name="email" required />
                           <input type="text" placeholder="{{__('lang.enter_subject')}}" name="subject" required />
                           <textarea placeholder="{{__('lang.enter_msg')}}" required></textarea>
                           <input type="submit" value="{{__('lang.submit')}}" />
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end why section -->

      
@include('includes.footer')
       