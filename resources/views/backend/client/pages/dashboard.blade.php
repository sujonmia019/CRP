@extends('layouts.master')
@section('title', 'Dashboard')
@push('styles')
<style>
.client_btn_sec{
  display:flex;
}
.client_contact-us{
width:142px;
margin-left:10px;
height:41px;
margin: 0 auto;
text-align:center;
padding: 10px 7px;
font-size: 14px;
text-decoration: none;
color: #fff; 
background-color: #19AAF8;
}
.order_now_btn{
  padding: 10px 50px;
  
  background:#fff;
}
.feedback-btn {
    margin: 0 auto;
    width: 186px;
    text-align: center;
    padding: 10px 7px;
    font-size: 14px;
    text-decoration: none;
    color: #fff;
    background-color: #19AAF8;
    height: 44px;
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


<section class="client_dashboard">
<div class="title_welcome card p-4">
<div class="row ">
      <div class="col-md-12">
        <h1>Welcome Tachhab</h1>
      </div>
</div>
</div>

<div class="descript p-4">
    <div class="row">
        <div class="col-md-4">
          <div class="text-center p-4 card" style="border:1px solid #ddd">
            <h3>Requires? (Bulk Images)</h3>
            <p style="font-size:12px">If you need help or have any questions feel free to contact us. Make Sure to contact us for a custom price settings, you are planning to upload large volumes.</p>
            <div class="client_btn_sec">
            <a href="" class="client_contact-us">View Help Page</a>
            <a class="client_contact-us" href=""> Contact Us</a>
            </div>
          </div>
        </div>

        <div class="col-md-4 p-4" style="background-color:#19AAF8">
          <div class="text-center" >
            <h3>Free Trial</h3>
            <p style="color:#fff">You have 20 free trial images left! (Cannot be used on pets, selfies or landscapes)</p>
           
            <a href="" class="order_now_btn"> Order Now</a>
          </div>
        </div>

        <div class="col-md-4">
          <div class="text-center card p-4">
            <h3>Feedback</h3>
            <p>You have 20 free trial images left! (Cannot be used on pets, selfies or landscapes)</p>
            <a class="feedback-btn" href=""> Order Now</a>
          </div>
        </div>
    </div>
</div>

<div class="chart_show card p-4">
<div class="row ">
        <div class="col-md-9" style="">
            <div class="">
              Chart Display here...
            </div>
        </div>

        <div class="col-md-3">
          <div class="ads_from">
            <img src="" alt="">
          </div>
        </div>
     </div>
</div>


<div class="table_order card p-4">
<div class="row">
  <div class="all_card_title"><b>Recent Orders</b></div>
    <div class="table-responsive pt-4 ">          
  <table class="table table-bordered w-100 ">
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
        <td><a class="btn" style="background-color: #19AAF8" href="">Trac Order</a></td>
      </tr>
   <tr>
        <td>1</td>
        <td>Anna</td>
        <td>Pitt</td>
        <td>50</td>
        <td>Name</td>
        <td><span class="active_btn">Active</span></td>
        <td>$545</td>
        <td><a class="btn" style="background-color: #19AAF8" href="">Trac Order</a></td>
      </tr>

     <tr>
        <td>1</td>
        <td>Anna</td>
        <td>Pitt</td>
        <td>50</td>
        <td>Name</td>
        <td><span class="active_btn">Active</span></td>
        <td>$545</td>
        <td><a class="btn" style="background-color: #19AAF8" href="">Trac Order</a></td>
      </tr>
     <tr>
        <td>1</td>
        <td>Anna</td>
        <td>Pitt</td>
        <td>50</td>
        <td>Name</td>
        <td><span class="active_btn">Active</span></td>
        <td>$545</td>
        <td><a class="btn" style="background-color: #19AAF8" href="">Trac Order</a></td>
      </tr>

     <tr>
        <td>1</td>
        <td>Anna</td>
        <td>Pitt</td>
        <td>50</td>
        <td>Name</td>
        <td><span class="active_btn">Active</span></td>
        <td>$545</td>
        <td><a class="btn" style="background-color: #19AAF8" href="">Trac Order</a></td>
      </tr>
      
     <tr>
        <td>1</td>
        <td>Anna</td>
        <td>Pitt</td>
        <td>50</td>
        <td>Name</td>
        <td><span class="active_btn">Active</span></td>
        <td>$545</td>
        <td><a class="btn" style="background-color: #19AAF8" href="">Trac Order</a></td>
      </tr>
      

       <tr>
        <td>1</td>
        <td>Anna</td>
        <td>Pitt</td>
        <td>50</td>
        <td>Name</td>
        <td><span class="active_btn">Active</span></td>
        <td>$545</td>
        <td><a class="btn" style="background-color: #19AAF8" href="">Trac Order</a></td>
      </tr>
      

       <tr>
        <td>1</td>
        <td>Anna</td>
        <td>Pitt</td>
        <td>50</td>
        <td>Name</td>
        <td><span class="active_btn">Active</span></td>
        <td>$545</td>
        <td><a class="btn" style="background-color: #19AAF8" href="">Trac Order</a></td>
      </tr>

       <tr>
        <td>1</td>
        <td>Anna</td>
        <td>Pitt</td>
        <td>50</td>
        <td>Name</td>
        <td><span class="active_btn">Active</span></td>
        <td>$545</td>
        <td><a class="btn" style="background-color: #19AAF8" href="">Trac Order</a></td>
      </tr>
      
       <tr>
        <td>1</td>
        <td>Anna</td>
        <td>Pitt</td>
        <td>50</td>
        <td>Name</td>
        <td><span class="active_btn">Active</span></td>
        <td>$545</td>
        <td><a class="btn" style="background-color: #19AAF8" href="">Trac Order</a></td>
      </tr>
      
       <tr>
        <td>1</td>
        <td>Anna</td>
        <td>Pitt</td>
        <td>50</td>
        <td>Name</td>
        <td><span class="active_btn">Active</span></td>
        <td>$545</td>
        <td><a class="btn" style="background-color: #19AAF8" href="">Trac Order</a></td>
      </tr>
      
       <tr>
        <td>1</td>
        <td>Anna</td>
        <td>Pitt</td>
        <td>50</td>
        <td>Name</td>
        <td><span class="active_btn">Active</span></td>
        <td>$545</td>
        <td><a class="btn" style="background-color: #19AAF8" href="">Trac Order</a></td>
      </tr>

       <tr>
        <td>1</td>
        <td>Anna</td>
        <td>Pitt</td>
        <td>50</td>
        <td>Name</td>
        <td><span class="active_btn">Active</span></td>
        <td>$545</td>
        <td><a class="btn" style="background-color: #19AAF8" href="">Trac Order</a></td>
      </tr>

       <tr>
        <td>1</td>
        <td>Anna</td>
        <td>Pitt</td>
        <td>50</td>
        <td>Name</td>
        <td><span class="active_btn">Active</span></td>
        <td>$545</td>
        <td><a class="btn" style="background-color: #19AAF8" href="">Trac Order</a></td>
      </tr>
    </tbody>
  </table>
  </div>
</div>
</div>
</section>
@endsection