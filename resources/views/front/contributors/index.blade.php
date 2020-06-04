@extends('layouts/front')


@section('title')
    @lang('front.title_conditions')
@endsection

    @section('style')

    @endsection


    @section('main')

    <section id="conditions_rules" class="container-fluid">
        <div class="container-fluid inner_page_header">
          <div class="container">
            <div class="row">
              <div class="col-12 col-sm-4">
                <h1>@lang('front.conditions')</h1>
              </div>
              <div class="col-12 col-sm-8">
                <p class="contr_text d-none d-lg-block">@lang('front.conditions_headline')</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="conditions_rules container">
        <div class="col-12">
        <h1 style="color:black;">@lang('front.rental_header')</h1>
        <p><strong>@lang('front.driving_licence')</strong><br>
           @lang('front.driving_content')
                 </p>

        <p></p>

        <p><strong>@lang('front.age_restriction')</strong><br>
         @lang('front.age_content')
       </p>

       <p><strong>@lang('front.book_title')</strong><br>
         <ol>
           <li><strong>@lang('front.online')</strong>
             @lang('front.online_content')
           </li>

           <li><strong>@lang('front.email')</strong>
            @lang('front.email_content')
           </li>

           <li><strong>@lang('front.phone')</strong>
            @lang('front.phone_content')
           </li>

         </ol>

           <ul>
             <li>@lang('front.book1')
             </li>
             <li>@lang('front.book2')
             </li>
           </ul>

          <p></p>
         <p><strong>@lang('front.payment')</strong></p>
         <ol>
           <li><strong>@lang('front.cash')</strong>@lang('front.cash_content')
           </li>
           <li><strong>@lang('front.debit')</strong>@lang('front.debit_content')
           </li>
           <li><strong>@lang('front.bank')</strong>@lang('front.bank_content')
           </li>
         </ol>

         <p></p>
        <p><strong>@lang('front.rules')</strong></p>
        <p>@lang('front.rules_1')
        </p>
        <p>@lang('front.rules_2')
        </p>

           <p></p>
           <p></p>
          <p><strong>@lang('front.fines')</strong></p>
          <ul>
            <li>@lang('front.fines_1')
            </li>
            <li>@lang('front.fines_2')
            </li>
          </ul>

          <p></p>
      </div>
    </div>


    @endsection


    @section('script')

    @endsection
