@extends('member.master_dashboard')

@section('member-dashboard-content')

<div class="content-wrapper">

    <div>
        <h4 style="text-align: center; margin-top: 20px;"> Volunteer To Make A Donation Today  </h4>

        <p style="margin: 20px">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus earum deserunt et, quis ipsam eaque quibusdam tenetur molestias at nobis, quia, aliquam nostrum ratione suscipit amet facilis fuga. Corporis, possimus!
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus earum deserunt et, quis ipsam eaque quibusdam tenetur molestias at nobis, quia, aliquam nostrum ratione suscipit amet facilis fuga. Corporis, possimus!
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus earum deserunt et, quis ipsam eaque quibusdam tenetur molestias at nobis, quia, aliquam nostrum ratione suscipit amet facilis fuga. Corporis, possimus!
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus earum deserunt et, quis ipsam eaque quibusdam tenetur molestias at nobis, quia, aliquam nostrum ratione suscipit amet facilis fuga. Corporis, possimus!
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minus earum deserunt et, quis ipsam eaque quibusdam tenetur molestias at nobis, quia, aliquam nostrum ratione suscipit amet facilis fuga. Corporis, possimus!
        </p>
    </div>



    <div class="col-md-6 grid-margin stretch-card m-5">
        <div class="card" style="justify-content:center; display:flex;">
          <div class="card-body">

            <h4 class="card-title"> Volunteer To Make A Donation Today </h4>

            {{-- <p class="card-description">continue <code>.btn-block</code></p> --}}

            <div class="template-demo">
                <div class="row">
                    {{-- <div class="col-lg-6">
                        <i class="mdi mdi-check-circle"></i>
                        <button type="button" onclick="initiatePay()" class="btn btn-info btn-lg btn-block">
                            <i class="mdi mdi-check-circle"></i>
                             Pay With SWWIPE
                        </button>
                    </div> --}}

                    <div class="col-lg-6">
                        <form method="POST" action="{{ route('donate') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
                            <div class="row" style="margin-bottom:40px;">
                                <div class="col-md-8 col-md-offset-2">
                                    <p>
                                        <div>
                                            Buy Me Coffee
                                        </div>
                                    </p>
                                    <input type="hidden" name="email" value="{{ Auth::user()->email }}"> {{-- required --}}
                                    <input type="hidden" name="orderID" value="345">
                                    <input type="number" class="form-control m-2" name="amount" value=""> {{-- required in kobo --}}
                                    {{-- <input type="number" class="form-control" name="amount" value=""> required in kobo --}}

                                    <input type="hidden" name="quantity" value="1">
                                    <input type="hidden" name="currency" value="NGN">
                                    <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
                                    <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                                    <input type="hidden" name="callback_url" value="http://localhost:8000/donation/callback">

                                    {{-- <input type="hidden" name="split_code" value="SPL_EgunGUnBeCareful"> to support transaction split. more details https://paystack.com/docs/payments/multi-split-payments/#using-transaction-splits-with-payments --}}
                                    {{-- <input type="hidden" name="split" value="{{ json_encode($split) }}"> to support dynamic transaction split. More details https://paystack.com/docs/payments/multi-split-payments/#dynamic-splits --}}
                                    {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}

                                    <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}

                                    <p>
                                        {{-- <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">
                                            <i class="fa fa-plus-circle fa-lg"></i> Pay Now! with Paystack
                                        </button> --}}

                                        <button class="btn btn-primary btn-lg btn-block"  type="submit" value="Pay Now!">
                                            <i class="mdi mdi-check-circle"></i>
                                            Pay with Paystack
                                          </button>
                                    </p>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>


          </div>
        </div>
      </div>


</div>












@endsection
