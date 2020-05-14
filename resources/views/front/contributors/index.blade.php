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
        <h1 style="color:black;">Rental Terms And Conditions</h1>
        <p><strong>Driving License</strong><br>
          Any valid driving license which is printed in Latin or Cyrillic alphabet is acceptable on territory of Georgia during one year after Car Renter’s arrival
        </p>

        <p></p>

        <p><strong>Age Restrictions</strong><br>
         Any driver who is at least 21 years old and has 1 year of driving experience is automatically insured with all conditions listed below
       </p>

       <p><strong>How To Book Vehicle</strong><br>
         <ol>
           <li><strong>Online</strong>
             reservation by checking the available vehicle according to the date and location on the front page <a href=""> https://bestcarrent.ge </a>and make a online reservation. Reservation is free of charge and you don't need to make an online prepayment
           </li>

           <li><strong>Email</strong>
            reservation  you can send you request and we will make a reservation for you
           </li>

           <li><strong>Phone</strong>
            Phone reservation are accepted on our 24/7 service hotline
           </li>

         </ol>

           <ul>
             <li>reservation  you can send you request and we will make a reservation for you reservation  you can send you request and we will make a reservation for you reservation  you can send you request and we will make a reservation for you reservation  you can send you request and we will make a reservation for you
             </li>
             <li>We recommend you to look through available vehicles for the rental period by according to the date and location before making email or phone reservation. During the summer season we strongly advise to reserve a vehicle online before making a mail or a phone confirmation
             </li>
           </ul>

          <p></p>
         <p><strong>Payment methods:</strong></p>
         <ol>
           <li><strong>Cash</strong>, on the first day of the rental
           </li>
           <li><strong>Debit/Credit Card</strong> payment (Viza Or Mastercard Debit or Credit Card) additional charge of 3.5% is added to the rental price. Card payment can be done during vehicle pickup (not online). You can select card payment during the booking process.
           </li>
           <li><strong>Bank</strong> transfer,must be requested by email and paid at least 1 week before the start of the rental and paid by invoice
           </li>
         </ol>

         <p></p>
        <p><strong>One Way Rentals</strong></p>
        <p>National One-Way Rentals are prices are calculated automatically during when you search for available vehicle according to the date and location.
        </p>
        <p>International Crossing of the border can be done with all vehicles (unless indecated otherwise), but pickup and drop off location must the territory of the same country.
        </p>

           <p></p>
           <p></p>
          <p><strong>Rules Regarding Fines:</strong></p>
          <ul>
            <li>If during rental period Car Renter violates any parking or traffic laws, Car Renter is obliged to compensate the amount of fine defined by Car Owner (NOTE: ask for documentation from official governmet sites for egs. <a href=""> https://parking.tbilisi.gov.ge </a>,<a href=""> https://police.ge </a>, etc.). In case of video fine, Car renter is obliged to follow the instructions of the Car Owner and take responsibilities on fine
            </li>
            <li>All fines that have been handed personally are registered in police database on Car Renter ’s name and must be paid by Georgian law before departure from the country
            </li>
          </ul>

          <p></p>
      </div>
    </div>


    @endsection


    @section('script')

    @endsection
