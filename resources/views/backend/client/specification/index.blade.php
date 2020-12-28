@extends('layouts.master')
@section('title', 'Order')
@section('preloader')
    @parent
@endsection
@section('sidenavbar')
    @parent
@endsection
@section('content')

<style>
.spec-header{
    display: inline-flex;
    flex-wrap: wrap;
    gap: 35px;
}
.spec-btn > button{
    background: #19aaf8;
    padding: 5px;
    width:155px;
    font-size: 16px;
    border:none;
    height:40px;
    display: flex;
    align-items: center;
    justify-content: space-evenly;
}
.price_bold{
    font-size: 40px;
    font-weight: 900;
    color: #000;
    margin-bottom: 0;
}
.price_bold span{
    font-size:15px;
}
</style>

<section class="order_specification card p-4"> 
<div class="spec-header">
<div class="spec-text">
<h2>Specification</h2>
</div>
<div class="spec-btn">
<a href="{{ route('client.specification.create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Create New</a>
</div>
</div>
<hr>
    <div class="row my-4">
        <div class="col-md-12">
            <h3>DT-587854548585</h3>
        </div>
    </div>
    <div class="row pl-4">
        <div class="col-md-2">
            <li class="list_image">Jewelry</li>
            <li class="list_image">PNG</li>
            <button class="btn btn-primary"><i class="fas fa-eye"></i> View</button>
        </div>
        <div class="col-md-3">
            <li class="list_image">Background Remove</li>
            <li class="list_image">09 Sep, 2020</li>
            <button class="btn btn-primary"><i class="fas fa-edit"></i> Edit Specification</button>
        </div>
        <div class="col-md-4">
            <li class="list_image">3:2</li>
            <li class="hide_opacity list_image"></li>
            <button class="btn btn-primary"><i class="fa fa-sticky-note" aria-hidden="true"></i> Note</button> <span class="simple_btn"><i class="fas fa-clock"></i> 24 Hours</span>
        </div>
        <div class="col-md-3">
        <input type="file" class="form-control" value="Upload" id="upload_img_" name="upload_img_" style="display:none">
            <label for="upload_img_" class="upload_btn_file upload_img_"><i class="fa fa-upload" aria-hidden="true"></i> Upload</label>
            <p class="price_bold">$1.58</p>
            <span>Per Image</span>
        </div>
    </div>
    <hr style="border-bottom:1px solid #ddd">
    <div class="row my-4">
        <div class="col-md-12">
            <h3>DT-587854548585</h3>
        </div>
    </div>
    <div class="row pl-4">
        <div class="col-md-2">
            <li class="list_image">Jewelry</li>
            <li class="list_image">PNG</li>
            <button class="btn btn-primary"><i class="fas fa-eye"></i> View</button>
        </div>
        <div class="col-md-3">
            <li class="list_image">Background Remove</li>
            <li class="list_image">09 Sep, 2020</li>
            <button class="btn btn-primary"><i class="fas fa-edit"></i >Edit Specification</button>
        </div>
        <div class="col-md-4">
            <li class="list_image">3:2</li>
            <li class="list_image hide_opacity"></li>
            <button class="btn btn-primary"><i class="fa fa-sticky-note" aria-hidden="true"></i> Note</button> <span class="simple_btn"><i class="fas fa-clock"></i> 24 Hours</span>
        </div>
        <div class="col-md-3">
            <input type="file" class="form-control" value="Upload" id="upload_img_" name="upload_img_" style="display:none">
            <label class="upload_img_" for="upload_img_"><i class="fa fa-upload" aria-hidden="true"></i> Upload</label>
            <p class="price_bold">$1.58</p>
            <span>Per Image</span>
        </div>
    </div>
    <hr style="border-bottom:1px solid #ddd">
</section>
@endsection