@extends('layouts.master')
@section('title', 'Specification')
@push('styles')

@endpush
@section('preloader')
@parent
@endsection
@section('sidenavbar')
@parent
@endsection
@section('content')

<section class="user_marketplace">

    <div class="marketplace_list card p-4 mt-2" style="border-bottom:4px solid #ddd;">
        <h4 class="d-flex justify-content-between m-0">Marketplace
            <a href="{{ route('admin.specifications.create') }}" class="btn btn-sm text-light rounded-0" style="background: #19AAF8;"><i class="fa fa-plus"></i> Add New</a>
        </h4>
    </div>

    <div class="marketplace_list card p-4 mt-2" style="border-bottom:4px solid #ddd;">
        <div class="row">
            <div class="col-md-12">
                <div class="marketplace_logo">
                    <img width="" height="60px;" src="{{ asset('public/assets/images/amazon_logo.png') }}" alt="">
                </div>
            </div>
        </div>

        <div class="row pl-4">
            <div class="col-md-3">
                <li class="list_image">JPG</li>
                <li class="list_image">sRGB</li>
            </div>
            <div class="col-md-3">
                <li class="list_image">#11111111</li>
                <li class="list_image">10 mb</li>
            </div>
            <div class="col-md-3">
                <li class="list_image">Trim (Crop Tighly)</li>
            </div>
            <div class="col-md-3 text-right">
                <p class="price_bold">$1.56</p>
                <span>Per Image</span>
            </div>
        </div>
    </div>


    <div class="marketplace_list card p-4 mt-2" style="border-bottom:4px solid #ddd;">
        <div class="row">
            <div class="col-md-12">
                <div class="marketplace_logo">
                    <img width="" height="60px;" src="{{ asset('public/assets/images/amazon_logo.png') }}" alt="">
                </div>
            </div>
        </div>

        <div class="row pl-4">
            <div class="col-md-3">
                <li class="list_image">JPG</li>
                <li class="list_image">sRGB</li>
            </div>
            <div class="col-md-3">
                <li class="list_image">#11111111</li>
                <li class="list_image">10 mb</li>
            </div>
            <div class="col-md-3">
                <li class="list_image">Trim (Crop Tighly)</li>
            </div>
            <div class="col-md-3 text-right">
                <p class="price_bold">$1.56</p>
                <span>Per Image</span>
            </div>
        </div>
    </div>

</section>


@endsection
