@extends('layouts.master')
@section('title', 'Select Specification')
@push('styles')
<style>
.select-spec{
  display:grid;
  grid-template-columns:1fr 1fr;
  grid-gap:50px;
  color:#fff;
}
.all-step,.market{
  display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    background:  #19AAF8;;
    height: 246px;
}
.img > img{
  width:100%;
  height:72px;
}
/* .step-text.text-center p {
    color: #fff !important;
} */
</style>
@endpush
@section('preloader')
    @parent
@endsection
@section('sidenavbar')
    @parent
@endsection
@section('content')
<section class="select-specification">
<div class="container mt-5">
<div class="heading">
<h2>Select Specification</h2>
</div>
    <div class="select-spec mt-5">
      <div class="step">
      <div class="all-step">
        <div class="img">
            <img src="{{ URL::asset('public/assets/images/fast-forward.svg') }}" alt="">
        </div>
      <div class="step-head">
         <h1>Step-By-Step</h1>
      </div>
      <div class="step-text text-center">
         <p class="text-white">Create Amazon, eBay, or Google Shopping compliant product images in just one click !</p>
      </div>
      <div class="step-btn">
         <a href="{{ route('client.specification-stepbystep.index') }}" class="btn btn-light">Continue</a>
      </div>
      </div>
    </div>
    <div class="market bg-light text-dark">
      <div class="img">
         <img src="{{ URL::asset('public/assets/images/market.svg') }}" alt="">
      </div>
      <div class="step-head">
         <h1>Marketplaces</h1>
      </div>
      <div class="step-text text-center ">
         <p class="text-dark">Create Amazon, eBay, or Google Shopping compliant product images in just one click !</p>
      </div>
      <div class="step-btn">
         <a href="{{ route('client.specification-marketplace.index') }}" class="btn btn-primary">Continue</a>
      </div>
    </div>
</div>
</div>
</div>
</section>
@endsection
