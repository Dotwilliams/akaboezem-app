@extends('member.master_dashboard')

@section('member-dashboard-content')

<div class="content-wrapper">
   @if (Auth::user()->subscription_status)
   <div class="row">

    @forelse ($resources as $resource)

    <div class="col-md-4">

         <!-- Card with an image overlay -->
    <div  style="max-width: 230px; min-height:160px; margin: 25px;" class="card shadow">
        {{-- <img src="{{ asset('signup/images/card.jpg') }}" class="card-img-top"  alt="..."> --}}
        <div class="card-img-overlay">
          <h5 class="card-title" style="text-align: center;"> <b> {{ $resource->name }} </b> </h5>
          {{-- <p class="card-title" style="text-align: center;">{{ $resource->filepath }}</p> --}}

          {{-- <a href="#"  class="btn btn-primary" style="text-align: center;" >Download</a> --}}
          <a href="/storage/{{$resource->filepath}}"  class="btn btn-primary btn-lg btn-block" download>
            <i class="mdi mdi-download"></i>
            Download
          </a>
        </div>
      </div><!-- End Card with an image overlay -->

    </div>

@empty

<h6> No Data Avaliable </h6>

@endforelse

</div>
@else
<h3> Subscribe For A Package Now </h3>
{{-- <h6>Proceed to payments <button onclick="initiatePay()" class="btn btn-primary">Pay With SWWIPE</button> </h6> --}}

<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">

        <h4 class="card-title">Proceed to payment Now</h4>

        {{-- <p class="card-description">continue <code>.btn-block</code></p> --}}

        <div class="template-demo">
            <div class="row">
                <div class="col-lg-4">
                    <button type="button" onclick="initiatePay()" class="btn btn-info btn-lg btn-block mt-5">
                        <i class="mdi mdi-check-circle"></i>
                         Pay With SWWIPE
                    </button>
                </div>

                <div class="col-lg-4">
                    <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                        <div class="row" style="margin-bottom:40px;">
                            <div class="col-md-8 col-md-offset-2">

                                <input type="hidden" name="email" value="{{ Auth::user()->email }}"> {{-- required --}}
                                <input type="hidden" name="orderID" value="345">
                                <input type="hidden" name="amount" value="100000"> {{-- required in kobo --}}
                                <input type="hidden" name="quantity" value="1">
                                <input type="hidden" name="currency" value="NGN">
                                <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
                                <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                                <input type="hidden" name="callback_url" value="http://localhost:8000/payment/callback">

                                {{-- <input type="hidden" name="split_code" value="SPL_EgunGUnBeCareful"> to support transaction split. more details https://paystack.com/docs/payments/multi-split-payments/#using-transaction-splits-with-payments --}}
                                {{-- <input type="hidden" name="split" value="{{ json_encode($split) }}"> to support dynamic transaction split. More details https://paystack.com/docs/payments/multi-split-payments/#dynamic-splits --}}
                                {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}

                                <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}

                                <p>
                                    {{-- <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">
                                        <i class="fa fa-plus-circle fa-lg"></i> Pay Now! with Paystack
                                    </button> --}}

                                    <button class="btn btn-primary btn-lg btn-block mt-5"  type="submit" value="Pay Now!">
                                        <i class="mdi mdi-check-circle"></i>
                                        Pay with Paystack
                                      </button>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-lg-4">
                    @if(Session::has('message'))
                    <p class="alert alert-info">{{ Session::get('message') }}</p>
                     @endif
                  <form action="/post_payment_prove" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div>

                        <input type="file" name="payment_prove" class="form-control-file py-2"  id="">
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    </div>
                    <button type="submit"  class="btn btn-secondary btn-lg btn-block">
                        <i class="mdi mdi-check-circle"></i>
                         Pay Offline
                    </button>
                  </form>
                </div>

            </div>



        </div>




      </div>
    </div>
  </div>


   @endif


</div>



@endsection

<script>
    function initiatePay(){
        const payment = Netpay.createPayment({
        amount: 400000,
        reference: 'SFSE552VB',
        email: 'victor@gmail.com',
        merchantKey: 'B3DwePGAupzuL0WYX3Yzw4Am',
        callback: function(response){
        alert(`The payment with reference ${response.reference} was successful`);
        },
        onClose: function() {
        alert(`The payment attempt failed`);
        }
        });
        payment.open();
    }
</script>
