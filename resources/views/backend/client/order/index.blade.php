@extends('layouts.master')
@section('title', 'Content')
@push('styles')
<style>
  .all-order {
    max-width: 1525px;
    width: 1525px;
    height: 568px;
    background: #fff;
    margin: 117px auto;
  }

  .order-btn {
    display: flex;
    width: 185px;
    height: 42px;
    background: #19aaf8;
    color: #fff;
    margin-left: 86px;
    margin-top: 9px;
    cursor: pointer;
    border: none;
    justify-content: center;
    align-items: center;
  }
  .order-btn:hover{
    color:#fff;
  }
  .in_progress {
    height: 40px;
    background-color: #fff;
  }

  .in_progress_bar {
    width: 70%;
    height: 100px;
  }

  .form-control:focus {
    box-shadow: none;
  }

  .form-control-underlined {
    border-width: 0;
    border-bottom-width: 1px;
    border-radius: 0;
    padding-left: 0;
  }

  .form-control::placeholder {
    font-size: 0.95rem;
    color: #aaa;
    font-style: italic;
  }

  .track_order {
    color: #fff;
  }

  .all_card_title {
    font-size: 25px;
    margin-right: 36px;
  }

  .invoice_btn {
    background-color: #19AAF8;
    color: #fff;
  }

  .list_image {
    list-style-image:url('{{asset('public/assets/images/list_background_bullet.png')}}');
    text-align: left;
    line-height: 50px;
    cursor: pointer;
  }

  .take_it_btn {
    color: #fff;
    background-color: #19AAF8;
  }

  #order_details_spec li {
    list-style-image:url('{{asset('public/assets/images/list_background_bullet.png')}}');
    float: left;
    padding: 5px 10px;
  }

  #order_details_spec li span {
    padding-right: 50px;
  }

  .product_image_complete img {
    width: 100%;
  }

  .justify div {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .btn-crm {
    background-color: #19AAF8;
    padding: 2px 5px;
    color: #fff;
    
  }

  .hide_opacity {
    opacity: 0;
  }

  .simple_btn {
    border: 1px solid #ddd;
    padding: 4px 6px;
  }

  .price_bold {
    font-size: 40px;
    font-weight: 900;
    color: #000;
  }
  .track-btn {
    color: #fff;
    padding: 4px 35px;
    background:#19aaf8;
}
  .upload_img_ {
    padding: 10px 20px;
    border: 1px solid #ddd;
    background-color: #19AAF8;
    color: #fff;
    cursor: pointer;
  }
</style>

@endpush
@section('preloader')
@parent
@endsection
@section('sidenavbar')
@parent
@endsection
@section('content')
<section class="">

  <!-- <div class="row">
        <div class="top-head-order" style="background-color: #ddd;">
            <div class="top-head-text">
             <h2>Orders</h2>
            </div>
            <div class="order-create-btn">
            <button class="btn"><i class="fa fa-plus" aria-hidden="true"></i>
Create New</button>
            </div>
        </div>

        <div class="col-md-3" style="background-color: #ddd;">
          <div class="ads_from">
            <img src="" alt="">
          </div>
        </div>
     </div> -->


  <div class="row all-order">
    <div class="col-lg-12 d-flex align-items-center">
    
        <div class="d-flex justify-content-start">
          <h1 class="ml-5">Orders</h1>
          <a href="{{ route('client.order.create') }}" class="order-btn">Create New</a>
      </div>





    </div>
    <!-- <div class="all_card_title">
    <p>Orders</p>
    <button class="order-btn">Create New</button>
  </div> -->
    <div class="table-responsive ">
      <table class="table table-bordered w-100">
        <tr>
          <th>ID</th>
          <th>Order Date</th>
          <th>Deadline</th>
          <th>Image</th>
          <th>Specification</th>
          <th>Status</th>
          <th>Price</th>
          <th>Acts</th>
        </tr>
        <tbody>
          <tr>
            <td>1</td>
            <td>Anna</td>
            <td>Pitt</td>
            <td>50</td>
            <td>Name</td>
            <td><span class="active_btn">Active</span></td>
            <td>$545</td>
            <td><a class="track-btn" style="background-color: #19AAF8" href="">Trac Order</a></td>
          </tr>

          <tr>
            <td>1</td>
            <td>Anna</td>
            <td>Pitt</td>
            <td>50</td>
            <td>Name</td>
            <td><span class="active_btn">Active</span></td>
            <td>$545</td>
            <td><a class="track-btn" href="">Trac Order</a></td>
          </tr>

          <tr>
            <td>1</td>
            <td>Anna</td>
            <td>Pitt</td>
            <td>50</td>
            <td>Name</td>
            <td><span class="active_btn">Active</span></td>
            <td>$545</td>
            <td><a class="track-btn" href="">Trac Order</a></td>
          </tr>

          <tr>
            <td>1</td>
            <td>Anna</td>
            <td>Pitt</td>
            <td>50</td>
            <td>Name</td>
            <td><span class="active_btn">Active</span></td>
            <td>$545</td>
            <td><a class="track-btn" href="">Trac Order</a></td>
          </tr>

          <tr>
            <td>1</td>
            <td>Anna</td>
            <td>Pitt</td>
            <td>50</td>
            <td>Name</td>
            <td><span class="active_btn">Active</span></td>
            <td>$545</td>
            <td><a class="track-btn" href="">Trac Order</a></td>
          </tr>

          <tr>
            <td>1</td>
            <td>Anna</td>
            <td>Pitt</td>
            <td>50</td>
            <td>Name</td>
            <td><span class="active_btn">Active</span></td>
            <td>$545</td>
            <td><a class="track-btn" href="">Trac Order</a></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

@endsection